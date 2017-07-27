<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\UnSubscribeCommand;
use ApiClients\Foundation\Transport\Service\RequestService;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class UnSubscribeHandler
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
     * @param  UnSubscribeCommand $command
     * @return PromiseInterface
     */
    public function handle(UnSubscribeCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'DELETE',
                'repos/' . $command->getRepository() . '/subscription'
            )
        );
    }
}
