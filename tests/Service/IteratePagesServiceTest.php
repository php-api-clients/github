<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Service;

use ApiClients\Foundation\Transport\ClientInterface;
use ApiClients\Foundation\Transport\JsonStream;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Tools\TestUtilities\TestCase;
use Prophecy\Argument;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use function React\Promise\all;
use function React\Promise\resolve;

final class IteratePagesServiceTest extends TestCase
{
    public function testHandle()
    {
        $path = '/foo.bar';

        $client = $this->prophesize(ClientInterface::class);

        /**
         * First request
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
         * Second request
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
         * Third request
         */
        $thirdRequest = new Request('GET', 'https://api.example.com/2');
        $client->request($thirdRequest, Argument::type('array'))->shouldNotBeCalled();

        $requestService = new RequestService($client->reveal());
        $iteratePagesService = new IteratePagesService($requestService);

        $items = [];
        $completed = false;
        $stream = $iteratePagesService->iterate($path)->subscribe(
            function ($item) use (&$items, &$stream) {
                $items[] = $item;

                if (count($items) == 2) {
                    $stream->dispose();
                }
            },
            function ($t) {
                throw $t;
            },
            function () use (&$completed) {
                $completed = true;
            },
            new ImmediateScheduler()
        );

        self::assertFalse($completed);
        self::assertSame([$firstBody, $secondBody], $items);
    }

    public function testHandleContinueEvenThoughNoOneIsListeningDontDoThisHopingRxPHPChangesSomeThingsAfterIveOpenedAnIssueButOnlyIfItIsValid()
    {
        $path = '/foo.bar';

        $client = $this->prophesize(ClientInterface::class);

        /**
         * First request
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
         * Second request
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
         * Third request
         */
        $thirdRequest = new Request('GET', 'https://api.example.com/2');
        $thirdBody = ['b'];
        $thirdStream = new JsonStream($thirdBody);
        $thirdHeaders = [
            'Link' => [
                '<https://api.example.com/2>; rel="last"',
            ],
        ];
        $thirdResponse = new Response(200, $thirdHeaders, $thirdStream);
        $client->request($thirdRequest, Argument::type('array'))->shouldBeCalled()->willReturn(resolve($thirdResponse));

        $requestService = new RequestService($client->reveal());
        $iteratePagesService = new IteratePagesService($requestService);

        $items = [];
        $completed = false;
        $iteratePagesService->iterate($path)->take(2)->subscribe(
            function ($item) use (&$items, &$stream) {
                $items[] = $item;
            },
            function ($t) {
                throw $t;
            },
            function () use (&$completed) {
                $completed = true;
            },
            new ImmediateScheduler()
        );

        self::assertTrue($completed);
        self::assertSame([$firstBody, $secondBody], $items);
    }
}
