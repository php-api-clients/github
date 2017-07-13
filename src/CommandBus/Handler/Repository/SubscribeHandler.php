<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\SubscribeCommand;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class SubscribeHandler
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
     * @param  SubscribeCommand $command
     * @return PromiseInterface
     */
    public function handle(SubscribeCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'PUT',
                'repos/' . $command->getRepository() . '/subscription',
                [],
                new JsonStream([
                    'subscribed' => $command->isSubscribed(),
                    'ignored' => $command->isIgnored(),
                ])
            )
        );
    }
}
