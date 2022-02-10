<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\ReplaceTopicsCommand;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class ReplaceTopicsHandler
{
    private RequestService $requestService;

    public function __construct(RequestService $requestService)
    {
        $this->requestService = $requestService;
    }

    public function handle(ReplaceTopicsCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'PUT',
                'repos/' . $command->getRepository() . '/topics',
                [],
                new JsonStream([
                    'names' => $command->getTopics(),
                ])
            )
        )->then(static function ($response) {
            return $response->getBody()->getParsedContents()['names'];
        });
    }
}
