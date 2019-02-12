<?php declare(strict_types=1);

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
     * @param  CommitCommand    $command
     * @return PromiseInterface
     */
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
