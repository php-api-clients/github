<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\ApiOverview;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class SshKeyFingerprints
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"SHA256_RSA":{"type":"string"},"SHA256_DSA":{"type":"string"},"SHA256_ECDSA":{"type":"string"},"SHA256_ED25519":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"SHA256_RSA":"generated_SHA256_RSA_null","SHA256_DSA":"generated_SHA256_DSA_null","SHA256_ECDSA":"generated_SHA256_ECDSA_null","SHA256_ED25519":"generated_SHA256_ED25519_null"}';
    public function __construct(public ?string $SHA256_RSA, public ?string $SHA256_DSA, public ?string $SHA256_ECDSA, public ?string $SHA256_ED25519)
    {
    }
}
