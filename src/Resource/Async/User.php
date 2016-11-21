<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Foundation\Hydrator\CommandBus\Command\HydrateCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\JsonDecodeCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\SimpleRequestCommand;
use ApiClients\Foundation\Transport\Response;
use ApiClients\Client\Github\CommandBus\Command\IteratePagesCommand;
use ApiClients\Client\Github\Resource\User as BaseUser;
use Psr\Http\Message\ResponseInterface;
use Rx\Observable;
use Rx\ObservableInterface;
use Rx\ObserverInterface;
use Rx\React\Promise;
use Rx\SchedulerInterface;

class User extends BaseUser
{
    public function refresh() : User
    {
        return $this->wait($this->callAsync('refresh'));
    }

    public function repository(string $repository)
    {
        return $this->getCommandBus()->handle(
            new SimpleRequestCommand('repos/' . $this->login() . '/' . $repository)
        )->then(function (ResponseInterface $response) {
            return $this->getCommandBus()->handle(new HydrateCommand('Repository', $response->getBody()->getJson()));
        });
    }

    public function repositories(): ObservableInterface
    {
        return Observable::create(function (
            ObserverInterface $observer,
            SchedulerInterface $scheduler
        ) {
            $this->getCommandBus()->handle(
                new IteratePagesCommand('users/' . $this->login() . '/repos', $scheduler)
            )->done(function (Observable $observable) use ($observer, $scheduler) {
                $observable->subscribeCallback(
                    [$observer, 'onNext'],
                    [$observer, 'onError'],
                    [$observer, 'onCompleted'],
                    $scheduler
                );
            });
        })->flatMap(function ($repositories) {
            return Observable::fromArray($repositories);
        })->flatMap(function ($repository) {
            return Promise::toObservable($this->getCommandBus()->handle(new HydrateCommand('Repository', $repository)));
        });
    }
}
