<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\PullRequest;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyRb implements RbInterface, EmptyResourceInterface
{
    public function label(): string
    {
        return null;
    }

    public function ref(): string
    {
        return null;
    }

    public function sha(): string
    {
        return null;
    }

    public function user(): User
    {
        return null;
    }

    public function repo(): Repository
    {
        return null;
    }
}
