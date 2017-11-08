<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Service;

use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Transport\ClientInterface;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use Prophecy\Argument;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;
use Rx\Testing\TestScheduler;
use function React\Promise\resolve;

final class IteratePagesServiceTest extends TestCase
{
    public function testHandle()
    {
        $path = '/foo.bar';

        $client = $this->prophesize(ClientInterface::class);

        /**
         * First request.
         */
        $firstRequest = new Request('GET', '/foo.bar');
        $firstBody = ['a'];
        $firstStream = new JsonStream($firstBody);
        $firstHeaders = [
            'Link' => [
                '<https://api.example.com/1>; rel="next", <https://api.example.com/2>; rel="last"',
            ],
        ];
        $firstResponse = new Response(200, $firstHeaders, $firstStream);
        $client->request($firstRequest, Argument::type('array'))->shouldBeCalled()->willReturn(resolve($firstResponse));

        /**
         * Second request.
         */
        $secondRequest = new Request('GET', 'https://api.example.com/1');
        $secondBody = ['b'];
        $secondStream = new JsonStream($secondBody);
        $secondHeaders = [
            'Link' => [
                '<https://api.example.com/2>; rel="next", <https://api.example.com/2>; rel="last"',
            ],
        ];
        $secondResponse = new Response(200, $secondHeaders, $secondStream);
        $client->request($secondRequest, Argument::type('array'))->shouldBeCalled()->willReturn(resolve($secondResponse));

        /**
         * Third request.
         */
        $thirdRequest = new Request('GET', 'https://api.example.com/2');
        $thirdBody = [];
        $thirdStream = new JsonStream($thirdBody);
        $thirdHeaders = [
            'Link' => [
                '<https://api.example.com/1>; rel="prev"',
            ],
        ];
        $thirdResponse = new Response(200, $thirdHeaders, $thirdStream);
        $client->request($thirdRequest, Argument::type('array'))->shouldBeCalled()->willReturn(resolve($thirdResponse));

        $requestService = new RequestService($client->reveal());
        $testScheduler = new TestScheduler();
        $iteratePagesService = new IteratePagesService($requestService, $testScheduler);

        $items = [];
        $completed = false;

        $iteratePagesService->iterate($path)->subscribe(
            function ($item) use (&$items) {
                $items[] = $item;
            },
            function ($t) {
                throw $t;
            },
            function () use (&$completed) {
                $completed = true;
            }
        );

        $testScheduler->start();

        self::assertTrue($completed);
        self::assertSame([$firstBody, $secondBody, $thirdBody], $items);
    }
}
