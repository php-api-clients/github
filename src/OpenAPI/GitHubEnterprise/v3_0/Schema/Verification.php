<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Verification
{
    public const SCHEMA_TITLE = 'Verification';
    public const SPL_HASH = '0000000008b9253000000000412ebbda';
    public const SCHEMA_DESCRIPTION = '';
    private ?bool $verified = null;
    private ?string $reason = null;
    private ?string $payload = null;
    private ?string $signature = null;
    public function verified() : ?bool
    {
        return $this->verified;
    }
    public function reason() : ?string
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
