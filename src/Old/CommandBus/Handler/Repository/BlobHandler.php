<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\BlobCommand;
use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use Clue\React\Buzz\Message\ReadableBodyStream;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use React\Stream\ThroughStream;
use RingCentral\Psr7\Request;
use WyriHaximus\React\Stream\Base64\ReadableStreamBase64Encode;
use WyriHaximus\React\Stream\Json\JsonStream;

final class BlobHandler
{
    private RequestService $requestService;

    private Hydrator $hydrator;

    private LoopInterface $loop;

    public function __construct(RequestService $requestService, Hydrator $hydrator, LoopInterface $loop)
    {
        $this->requestService = $requestService;
        $this->hydrator       = $hydrator;
        $this->loop           = $loop;
    }

    public function handle(BlobCommand $command): PromiseInterface
    {
        $stream = new JsonStream();
        $this->loop->futureTick(function () use ($stream, $command): void {
            $contentsStream = new ThroughStream();
            $stream->write('encoding', 'base64');
            $stream->write('content', new ReadableStreamBase64Encode($contentsStream));
            $stream->end();

            $this->loop->futureTick(static function () use ($contentsStream, $command): void {
                $command->getContents()->pipe($contentsStream);
            });
        });

        return $this->requestService->request(
            new Request(
                'POST',
                'repos/' . $command->getRepository() . '/git/blobs',
                [],
                new ReadableBodyStream($stream)
            )
        )->then(function ($tree) {
            return $this->hydrator->hydrate(TreeInterface::HYDRATE_CLASS, $tree->getBody()->getParsedContents());
        });
    }
}
