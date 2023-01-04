<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview;

final class SshKeyFingerprints
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"SHA256_RSA":{"type":"string"},"SHA256_DSA":{"type":"string"},"SHA256_ECDSA":{"type":"string"},"SHA256_ED25519":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'ApiOverview\\SshKeyFingerprints';
    public const SCHEMA_DESCRIPTION = '';
    private string $SHA256_RSA;
    private string $SHA256_DSA;
    private string $SHA256_ECDSA;
    private string $SHA256_ED25519;
    public function SHA256_RSA() : string
    {
        return $this->SHA256_RSA;
    }
    public function SHA256_DSA() : string
    {
        return $this->SHA256_DSA;
    }
    public function SHA256_ECDSA() : string
    {
        return $this->SHA256_ECDSA;
    }
    public function SHA256_ED25519() : string
    {
        return $this->SHA256_ED25519;
    }
}
