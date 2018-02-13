<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\PingWebHookCommand;
use ApiClients\Foundation\Transport\Service\RequestService;
use Psr\Http\Message\ResponseInterface;
use React\Promise\PromiseInterface;

final class PingWebHookHandler
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
     * @param  PingWebHookCommand $command
     * @return PromiseInterface
     */
    public function handle(PingWebHookCommand $command): PromiseInterface
    {
        return $this->requestService->request($command->getPingUrl())
            ->then(function (ResponseInterface $response) {
                return $response->getStatusCode() == 204;
            });
    }
}
