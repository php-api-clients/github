<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit;

final class Verification
{
    public const SCHEMA_JSON = '{"required":["verified","reason","signature","payload"],"type":"object","properties":{"payload":{"type":["string","null"]},"reason":{"enum":["expired_key","not_signing_key","gpgverify_error","gpgverify_unavailable","unsigned","unknown_signature_type","no_user","unverified_email","bad_email","unknown_key","malformed_signature","invalid","valid","bad_cert","ocsp_pending"],"type":"string"},"signature":{"type":["string","null"]},"verified":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'Commit\\Verification';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $payload;
    private string $reason;
    private ?string $signature;
    private bool $verified;
    public function payload() : ?string
    {
        return $this->payload;
    }
    public function reason() : string
    {
        return $this->reason;
    }
    public function signature() : ?string
    {
        return $this->signature;
    }
    public function verified() : bool
    {
        return $this->verified;
    }
}
