<?php declare(strict_types=1);

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

final class TreeHandler
{
    /**
     * @var RequestService
     */
    private $requestService;

    /**
     * @var Hydrator
     */
    private $hydrator;

    /**
     * @var LoopInterface
     */
    private $loop;

    /**
     * @param RequestService $requestService
     * @param Hydrator       $hydrator
     * @param LoopInterface  $loop
     */
    public function __construct(RequestService $requestService, Hydrator $hydrator, LoopInterface $loop)
    {
        $this->requestService = $requestService;
        $this->hydrator = $hydrator;
        $this->loop = $loop;
    }

    /**
     * @param  TreeCommand      $command
     * @return PromiseInterface
     */
    public function handle(TreeCommand $command): PromiseInterface
    {
        $stream = new JsonStream();
        $this->loop->futureTick(function () use ($stream, $command) {
            if ($command->getBaseTree() !== null) {
                $stream->write('base_tree', $command->getBaseTree());
            }

            $trees = JsonStream::createArray();
            $stream->write('tree', $trees);
            $stream->end();

            $this->loop->futureTick(function () use ($trees, $command) {
                /** @var NamedBlob $blob */
                foreach ($command->getBlobs() as $blob) {
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
