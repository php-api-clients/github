<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit;

final class Verification
{
    public const SCHEMA_JSON = '{"required":["verified","reason","signature","payload"],"type":"object","properties":{"payload":{"type":["string","null"]},"reason":{"enum":["expired_key","not_signing_key","gpgverify_error","gpgverify_unavailable","unsigned","unknown_signature_type","no_user","unverified_email","bad_email","unknown_key","malformed_signature","invalid","valid","bad_cert","ocsp_pending"],"type":"string"},"signature":{"type":["string","null"]},"verified":{"type":"boolean"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Commit\\Verification';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?string $payload;
    public readonly string $reason;
    public readonly ?string $signature;
    public readonly bool $verified;
    public function __construct(string $payload, string $reason, string $signature, bool $verified)
    {
        $this->payload = $payload;
        $this->reason = $reason;
        $this->signature = $signature;
        $this->verified = $verified;
    }
}
