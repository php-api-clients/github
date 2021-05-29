<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Organization;

use ApiClients\Client\Github\CommandBus\Command\Organization\AddWebHookCommand;
use ApiClients\Client\Github\Resource\WebHookInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class AddWebHookHandler
{
    private RequestService $requestService;

    private Hydrator $hydrator;

    public function __construct(RequestService $requestService, Hydrator $hydrator)
    {
        $this->requestService = $requestService;
        $this->hydrator       = $hydrator;
    }

    public function handle(AddWebHookCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'POST',
                'orgs/' . $command->getOrganization() . '/hooks',
                [],
                new JsonStream([
                    'name'   => $command->getName(),
                    'config' => $command->getConfig(),
                    'events' => $command->getEvents(),
                    'active' => $command->isActive(),
                ])
            )
        )->then(function ($hook) {
            return $this->hydrator->hydrate(WebHookInterface::HYDRATE_CLASS, $hook->getBody()->getParsedContents());
        });
    }
}
