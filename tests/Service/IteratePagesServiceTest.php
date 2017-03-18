<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Service;

use ApiClients\Foundation\Transport\ClientInterface;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Tools\TestUtilities\TestCase;
use Prophecy\Argument;
use RingCentral\Psr7\BufferStream;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;
use Rx\Observable;
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
        $firstBody = 'a';
        $firstStream = new BufferStream(strlen($firstBody));
        $firstStream->write($firstBody);
        $firstHeaders = [
            'Link' => [
                '<https://api.example.com/1>; rel="next", <https://api.example.com/2>; rel="last"',
            ],
        ];
        $firstResponse = new Response(200, $firstHeaders, $firstBody);
        $client->request($firstRequest, Argument::type('array'))->shouldBeCalled()->willReturn(resolve($firstResponse));

        /**
         * Second request
         */
        $secondRequest = new Request('GET', 'https://api.example.com/1');
        $secondBody = 'a';
        $secondStream = new BufferStream(strlen($secondBody));
        $secondStream->write($secondBody);
        $secondHeaders = [
            'Link' => [
                '<https://api.example.com/2>; rel="last"',
            ],
        ];
        $secondResponse = new Response(200, $secondHeaders, $secondBody);
        $client->request($secondRequest, Argument::type('array'))->shouldBeCalled()->willReturn(resolve($secondResponse));

        $requestService = new RequestService($client->reveal());
        $iteratePagesService = new IteratePagesService($requestService);

        $items = [];
        $completed = false;
        unwrapObservableFromPromise($iteratePagesService->handle($path))->subscribeCallback(
            function ($item) use (&$items) {
                $items[] = $item;
            },
            null,
            function () use (&$completed) {
                $completed = true;
            }
        );

        self::assertTrue($completed);
    }
}
