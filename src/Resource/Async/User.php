<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\CommandBus\Command\RepositoriesCommand;
use ApiClients\Client\Github\Resource\User as BaseUser;
use ApiClients\Foundation\Hydrator\CommandBus\Command\HydrateCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\SimpleRequestCommand;
use Psr\Http\Message\ResponseInterface;
use React\Promise\PromiseInterface;
use Rx\Observable;
use Rx\ObservableInterface;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

class User extends BaseUser
{
    public function refresh() : User
    {
        return $this->wait($this->callAsync('refresh'));
    }

    public function repository(string $repository): PromiseInterface
    {
        return $this->handleCommand(
            new SimpleRequestCommand('repos/' . $this->login() . '/' . $repository)
        )->then(function (ResponseInterface $response) {
            return $this->handleCommand(new HydrateCommand('Repository', $response->getBody()->getJson()));
        });
    }

    public function repositories(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new RepositoriesCommand($this->login())
        ));
    }
}
