<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\CommandBus\Command\SaveCommand;
use ApiClients\Client\Github\CommandBus\Command\UserCommand;
use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\JsonStream;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;
use RingCentral\Psr7\Request;
use function WyriHaximus\React\futureFunctionPromise;

final class SaveHandler
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
     * @param RequestService $requestService
     * @param Hydrator $hydrator
     */
    public function __construct(RequestService $requestService, Hydrator $hydrator)
    {
        $this->requestService = $requestService;
        $this->hydrator = $hydrator;
    }

    public function handle(SaveCommand $command): PromiseInterface
    {
        return $this->requestService->handle(
            new Request(
                'PATCH',
                $command->getUrl(),
                [],
                new JsonStream($command->getData())
            )
        )->then(function ($response) use ($command) {
            return $this->hydrator->hydrate(
                $command->getHydrateClass(),
                $response->getBody()->getJson()
            );
        });
    }
}
