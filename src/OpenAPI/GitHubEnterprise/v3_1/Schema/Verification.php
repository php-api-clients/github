<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class Verification
{
    public const SCHEMA_TITLE = 'Verification';
    public const SCHEMA_DESCRIPTION = '';
    private bool $verified;
    private string $reason;
    private ?string $payload = null;
    private ?string $signature = null;
    public function verified() : bool
    {
        return $this->verified;
    }
    public function reason() : string
    {
        return $this->reason;
    }
    public function payload() : ?string
    {
        return $this->payload;
    }
    public function signature() : ?string
    {
        return $this->signature;
    }
}
