<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\TreeCommand;
use ApiClients\Client\Github\Resource\Git\TreeInterface;
use ApiClients\Client\Github\VO\NamedBlob;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use Clue\React\Buzz\Message\ReadableBodyStream;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;
use WyriHaximus\React\Stream\Json\JsonStream;

use function assert;

final class TreeHandler
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

    public function handle(TreeCommand $command): PromiseInterface
    {
        $stream = new JsonStream();
        $this->loop->futureTick(function () use ($stream, $command): void {
            if ($command->getBaseTree() !== null) {
                $stream->write('base_tree', $command->getBaseTree());
            }

            $trees = JsonStream::createArray();
            $stream->write('tree', $trees);
            $stream->end();

            $this->loop->futureTick(static function () use ($trees, $command): void {
                foreach ($command->getBlobs() as $blob) {
                    assert($blob instanceof NamedBlob);
                    $node = [
                        'path' => $blob->getPath(),
                        'mode' => $blob->getMode(),
                        'type' => $blob->getType(),
                    ];

                    if ($blob->getSha() !== null) {
                        $node['sha'] = $blob->getSha();
                    }

                    if ($blob->getContent() !== null) {
                        $node['content'] = $blob->getContent();
                    }

                    $trees->writeValue($node);
                }

                $trees->close();
            });
        });

        return $this->requestService->request(
            new Request(
                'POST',
                'repos/' . $command->getRepository() . '/git/trees',
                [],
                new ReadableBodyStream($stream)
            )
        )->then(function ($tree) {
            return $this->hydrator->hydrate(TreeInterface::HYDRATE_CLASS, $tree->getBody()->getParsedContents());
        });
    }
}
