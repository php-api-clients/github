<?php declare(strict_types=1);

namespace ApiClients\Github\Resource\Async;

use Rx\Observable;
use Rx\ObservableInterface;
use ApiClients\Github\Resource\PagingTrait;
use ApiClients\Github\Resource\User as BaseUser;

class User extends BaseUser
{
    use PagingTrait;

    public function refresh() : User
    {
        return $this->wait($this->callAsync('refresh'));
    }

    public function repositories(): ObservableInterface
    {
        return $this->iteratePages('users/' . $this->login() . '/repos')->flatMap(function ($response) {
            return Observable::fromArray($response);
        })->map(function ($repository) {
            return $this->getTransport()->getHydrator()->hydrate('Repository', $repository);
        });
    }
}
