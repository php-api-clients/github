<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @EmptyResource("Git\EmptyUser")
 */
abstract class User extends AbstractResource implements UserInterface
{
    protected string $name;

    protected string $email;

    protected DateTimeInterface $date;

    public function name(): string
    {
        return $this->name;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function date(): DateTimeInterface
    {
        return $this->date;
    }
}
