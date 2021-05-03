<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Verification
{
    public const SCHEMA_TITLE = 'Verification';
    public const SPL_HASH = '000000006e7b770e000000005d0d00fd';
    public const SCHEMA_DESCRIPTION = '';
    private bool $verified;
    private string $reason;
    private string $payload;
    private string $signature;
    public function verified() : bool
    {
        return $this->verified;
    }
    public function reason() : string
    {
        return $this->reason;
    }
    public function payload() : string
    {
        return $this->payload;
    }
    public function signature() : string
    {
        return $this->signature;
    }
}
