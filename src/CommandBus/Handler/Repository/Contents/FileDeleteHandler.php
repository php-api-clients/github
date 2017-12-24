<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository\Contents;

use ApiClients\Client\Github\CommandBus\Command\Repository\Contents\FileDeleteCommand;
use ApiClients\Client\Github\Resource\Contents\FileOperationInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class FileDeleteHandler
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
     * @param  FileDeleteCommand $command
     * @return PromiseInterface
     */
    public function handle(FileDeleteCommand $command): PromiseInterface
    {
        $json = [
            'message' => $command->getCommitMessage(),
            'sha' => $command->getSha(),
        ];

        if ($command->getBranch() !== '') {
            $json['branch'] = $command->getBranch();
        }

        return $this->requestService->request(
            new Request(
                'DELETE',
                $command->getUrl(),
                [],
                new JsonStream($json)
            )
        )->then(function ($operation) {
            return $this->hydrator->hydrate(
                FileOperationInterface::HYDRATE_CLASS,
                $operation->getBody()->getParsedContents()
            );
        });
    }
}
