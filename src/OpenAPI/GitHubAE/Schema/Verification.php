<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Verification
{
    public const SCHEMA_JSON = '{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'Verification';
    public const SCHEMA_DESCRIPTION = '';
    private bool $verified;
    private string $reason;
    private $payload;
    private $signature;
    public function verified() : bool
    {
        return $this->verified;
    }
    public function reason() : string
    {
        return $this->reason;
    }
    public function payload()
    {
        return $this->payload;
    }
    public function signature()
    {
        return $this->signature;
    }
}
