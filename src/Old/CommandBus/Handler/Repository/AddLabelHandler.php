<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\AddLabelCommand;
use ApiClients\Client\Github\Resource\LabelInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class AddLabelHandler
{
    private RequestService $requestService;

    private Hydrator $hydrator;

    public function __construct(RequestService $requestService, Hydrator $hydrator)
    {
        $this->requestService = $requestService;
        $this->hydrator       = $hydrator;
    }

    public function handle(AddLabelCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'POST',
                'repos/' . $command->getRepository() . '/labels',
                [],
                new JsonStream([
                    'name' => $command->getName(),
                    'color' => $command->getColour(),
                ])
            )
        )->then(function ($label) {
            return $this->hydrator->hydrate(LabelInterface::HYDRATE_CLASS, $label->getBody()->getParsedContents());
        });
    }
}
