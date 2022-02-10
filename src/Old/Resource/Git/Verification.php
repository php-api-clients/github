<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Git\EmptyVerification")
 */
abstract class Verification extends AbstractResource implements VerificationInterface
{
    protected bool $verified;

    protected string $reason;

    protected string $signature;

    protected string $payload;

    public function verified(): bool
    {
        return $this->verified;
    }

    public function reason(): string
    {
        return $this->reason;
    }

    public function signature(): string
    {
        return $this->signature;
    }

    public function payload(): string
    {
        return $this->payload;
    }
}
