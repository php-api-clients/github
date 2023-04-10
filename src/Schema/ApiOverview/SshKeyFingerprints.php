<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\ApiOverview;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class SshKeyFingerprints
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"SHA256_RSA":{"type":"string"},"SHA256_DSA":{"type":"string"},"SHA256_ECDSA":{"type":"string"},"SHA256_ED25519":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"SHA256_RSA":"generated_SHA256_RSA_null","SHA256_DSA":"generated_SHA256_DSA_null","SHA256_ECDSA":"generated_SHA256_ECDSA_null","SHA256_ED25519":"generated_SHA256_ED25519_null"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('SHA256_RSA')] public ?string $sha256Rsa, #[\EventSauce\ObjectHydrator\MapFrom('SHA256_DSA')] public ?string $sha256Dsa, #[\EventSauce\ObjectHydrator\MapFrom('SHA256_ECDSA')] public ?string $sha256Ecdsa, #[\EventSauce\ObjectHydrator\MapFrom('SHA256_ED25519')] public ?string $sha256Ed25519)
    {
    }
}
