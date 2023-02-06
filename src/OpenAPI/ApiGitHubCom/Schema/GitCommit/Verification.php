<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit;

final class Verification
{
    public const SCHEMA_JSON = '{"required":["verified","reason","signature","payload"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'GitCommit\\Verification';
    public const SCHEMA_DESCRIPTION = '';
    public readonly bool $verified;
    public readonly string $reason;
    public readonly ?string $signature;
    public readonly ?string $payload;
    public function __construct(bool $verified, string $reason, string $signature, string $payload)
    {
        $this->verified = $verified;
        $this->reason = $reason;
        $this->signature = $signature;
        $this->payload = $payload;
    }
}
