<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class Verification
{
    public const SCHEMA_JSON = '{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'Verification';
    public const SCHEMA_DESCRIPTION = '';
    public ?bool $verified;
    public ?string $reason;
    public ?string $payload;
    public ?string $signature;
    public function __construct(bool $verified, string $reason, string $payload, string $signature)
    {
        $this->verified = $verified;
        $this->reason = $reason;
        $this->payload = $payload;
        $this->signature = $signature;
    }
}
