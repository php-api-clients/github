<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview;

final class SshKeyFingerprints
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"SHA256_RSA":{"type":"string"},"SHA256_DSA":{"type":"string"},"SHA256_ECDSA":{"type":"string"},"SHA256_ED25519":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'ApiOverview\\SshKeyFingerprints';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $SHA256_RSA;
    public readonly string $SHA256_DSA;
    public readonly string $SHA256_ECDSA;
    public readonly string $SHA256_ED25519;
    public function __construct(string $SHA256_RSA, string $SHA256_DSA, string $SHA256_ECDSA, string $SHA256_ED25519)
    {
        $this->SHA256_RSA = $SHA256_RSA;
        $this->SHA256_DSA = $SHA256_DSA;
        $this->SHA256_ECDSA = $SHA256_ECDSA;
        $this->SHA256_ED25519 = $SHA256_ED25519;
    }
}
