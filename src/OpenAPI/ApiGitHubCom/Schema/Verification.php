<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Verification
{
    public const SCHEMA_TITLE = 'Verification';
    public const SPL_HASH = '0000000054d5e5b30000000071115dec';
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
