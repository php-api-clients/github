<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C015670A01383Ee50883D61E694035Ac2
{
    public const SCHEMA_JSON = '{"required":["verified","reason","signature","payload"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'c_015670a01383ee50883d61e694035ac2';
    public const SCHEMA_DESCRIPTION = '';
    private bool $verified;
    private string $reason;
    private $signature;
    private $payload;
    public function verified() : bool
    {
        return $this->verified;
    }
    public function reason() : string
    {
        return $this->reason;
    }
    public function signature()
    {
        return $this->signature;
    }
    public function payload()
    {
        return $this->payload;
    }
}
