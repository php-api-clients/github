<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Verification
{
    public const SCHEMA_JSON = '{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Verification';
    public const SCHEMA_DESCRIPTION = '';
    public readonly bool $verified;
    public readonly string $reason;
    public readonly ?string $payload;
    public readonly ?string $signature;
    public function __construct(bool $verified, string $reason, string $payload, string $signature)
    {
        $this->verified = $verified;
        $this->reason = $reason;
        $this->payload = $payload;
        $this->signature = $signature;
    }
}
