<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit;

final class Verification
{
    public const SCHEMA_JSON = '{"required":["verified","reason","signature","payload"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'GitCommit\\Verification';
    public const SCHEMA_DESCRIPTION = '';
    private bool $verified;
    private string $reason;
    private ?string $signature;
    private ?string $payload;
    public function verified() : bool
    {
        return $this->verified;
    }
    public function reason() : string
    {
        return $this->reason;
    }
    public function signature() : ?string
    {
        return $this->signature;
    }
    public function payload() : ?string
    {
        return $this->payload;
    }
}
