<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Verification
{
    public const SCHEMA_TITLE = 'Verification';
    public const SPL_HASH = '000000001f1e252d000000004be6709d';
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
