<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ApiOverview;

final readonly class SshKeyFingerprints
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"SHA256_RSA":{"type":"string"},"SHA256_DSA":{"type":"string"},"SHA256_ECDSA":{"type":"string"},"SHA256_ED25519":{"type":"string"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $SHA256_RSA;
    public ?string $SHA256_DSA;
    public ?string $SHA256_ECDSA;
    public ?string $SHA256_ED25519;

    public function __construct(string $SHA256_RSA, string $SHA256_DSA, string $SHA256_ECDSA, string $SHA256_ED25519)
    {
        $this->SHA256_RSA     = $SHA256_RSA;
        $this->SHA256_DSA     = $SHA256_DSA;
        $this->SHA256_ECDSA   = $SHA256_ECDSA;
        $this->SHA256_ED25519 = $SHA256_ED25519;
    }
}
