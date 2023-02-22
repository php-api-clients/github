<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitCommit;

final readonly class Verification
{
    public const SCHEMA_JSON = '{"required":["verified","reason","signature","payload"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?bool $verified;
    public ?string $reason;
    public ?string $signature;
    public ?string $payload;
    public function __construct(bool $verified, string $reason, string $signature, string $payload)
    {
        $this->verified = $verified;
        $this->reason = $reason;
        $this->signature = $signature;
        $this->payload = $payload;
    }
}
