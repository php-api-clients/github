<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\WebHook;

use ApiClients\Client\Github\CommandBus\Command\WebHook\PingCommand;
use ApiClients\Foundation\Transport\Service\RequestService;
use Psr\Http\Message\ResponseInterface;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class PingHandler
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
     * @param  PingCommand      $command
     * @return PromiseInterface
     */
    public function handle(PingCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'POST',
                $command->getPingUrl()
            )
        )->then(function (ResponseInterface $response) {
            return $response->getStatusCode() == 204;
        });
    }
}
