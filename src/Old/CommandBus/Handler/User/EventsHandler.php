<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\User;

use ApiClients\Client\Github\CommandBus\Command\User\EventsCommand;
use ApiClients\Client\Github\Resource\EventInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use function ApiClients\Tools\Rx\observableFromArray;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;

final class EventsHandler
{
    /**
     * @var IteratePagesService
     */
    private $service;

    /**
     * @var Hydrator
     */
    private $hydrator;

    /**
     * @param IteratePagesService $service
     * @param Hydrator            $hydrator
     */
    public function __construct(IteratePagesService $service, Hydrator $hydrator)
    {
        $this->service = $service;
        $this->hydrator = $hydrator;
    }

    /**
     * @param  EventsCommand    $command
     * @return PromiseInterface
     */
    public function handle(EventsCommand $command): PromiseInterface
    {
        return resolve(
            $this->service->iterate('users/' . $command->getLogin() . '/events')
                ->flatMap(function ($events) {
                    return observableFromArray($events);
                })->map(function ($event) {
                    return $this->hydrator->hydrate(EventInterface::HYDRATE_CLASS, $event);
                })
        );
    }
}
