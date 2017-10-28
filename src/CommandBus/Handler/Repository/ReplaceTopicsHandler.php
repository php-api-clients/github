<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\ReplaceTopicsCommand;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class ReplaceTopicsHandler
{
    /**
     * @var RequestService
     */
    private $requestService;

    /**
     * @param RequestService $requestService
     */
    public function __construct(RequestService $requestService)
    {
        $this->requestService = $requestService;
    }

    /**
     * @param  ReplaceTopicsCommand $command
     * @return PromiseInterface
     */
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
        )->then(function ($response) {
            return $response->getBody()->getJson()['names'];
        });
    }
}
