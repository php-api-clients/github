<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\ResourceInterface;

interface VerificationInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Git\\Verification';

    public function verified(): bool;

    public function reason(): string;

    public function signature(): string;

    public function payload(): string;
}
