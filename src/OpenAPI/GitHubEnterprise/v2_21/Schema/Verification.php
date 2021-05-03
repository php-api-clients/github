<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class Verification
{
    public const SCHEMA_TITLE = 'Verification';
    public const SPL_HASH = '0000000065d65b64000000007ce49c9a';
    public const SCHEMA_DESCRIPTION = '';
    private boolean $verified;
    private string $reason;
    private string $payload;
    private string $signature;
    public function verified() : boolean
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
