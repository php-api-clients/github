<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyVerification implements VerificationInterface, EmptyResourceInterface
{
    public function verified(): bool
    {
        return null;
    }

    public function reason(): string
    {
        return null;
    }

    public function signature(): string
    {
        return null;
    }

    public function payload(): string
    {
        return null;
    }
}
