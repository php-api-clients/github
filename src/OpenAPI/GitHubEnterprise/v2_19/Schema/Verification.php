<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Verification
{
    public const SCHEMA_TITLE       = 'Verification';
    public const SCHEMA_DESCRIPTION = '';
    private ?bool $verified         = null;
    private ?string $reason         = null;
    private ?string $payload        = null;
    private ?string $signature      = null;

    public function verified(): ?bool
    {
        return $this->verified;
    }

    public function reason(): ?string
    {
        return $this->reason;
    }

    public function payload(): ?string
    {
        return $this->payload;
    }

    public function signature(): ?string
    {
        return $this->signature;
    }
}
