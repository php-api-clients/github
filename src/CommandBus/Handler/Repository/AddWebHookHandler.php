<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\AddWebHookCommand;
use ApiClients\Client\Github\Resource\WebHookInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class AddWebHookHandler
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
     * @param Hydrator       $hydrator
     */
    public function __construct(RequestService $requestService, Hydrator $hydrator)
    {
        $this->requestService = $requestService;
        $this->hydrator = $hydrator;
    }

    /**
     * @param  AddWebHookCommand $command
     * @return PromiseInterface
     */
    public function handle(AddWebHookCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'POST',
                'repos/' . $command->getRepository() . '/hooks',
                [],
                new JsonStream([
                    'name'   => $command->getName(),
                    'config' => $command->getConfig(),
                    'events' => $command->getEvents(),
                    'active' => $command->isActive(),
                ])
            )
        )->then(function ($label) {
            return $this->hydrator->hydrate(WebHookInterface::HYDRATE_CLASS, $label->getBody()->getParsedContents());
        });
    }
}
