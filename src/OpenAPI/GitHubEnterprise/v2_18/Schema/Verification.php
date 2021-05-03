<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Verification
{
    public const SCHEMA_TITLE = 'Verification';
    public const SPL_HASH = '000000000c92e6fe000000006ad867a6';
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
