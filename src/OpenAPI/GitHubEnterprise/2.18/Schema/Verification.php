<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Schema;

final class Verification
{
    public const SCHEMA_TITLE = 'Verification';
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
