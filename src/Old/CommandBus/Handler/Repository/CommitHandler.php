<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\CommitCommand;
use ApiClients\Client\Github\Resource\Git\CommitInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class CommitHandler
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

    public function handle(CommitCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'POST',
                'repos/' . $command->getRepository() . '/git/commits',
                [],
                new JsonStream([
                    'message' => $command->getMessage(),
                    'tree' => $command->getTree(),
                    'parents' => $command->getCommit(),
                ])
            )
        )->then(function ($tree) {
            return $this->hydrator->hydrate(CommitInterface::HYDRATE_CLASS, $tree->getBody()->getParsedContents());
        });
    }
}
