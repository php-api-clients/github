<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ApiOverview
{
    public const SCHEMA_JSON = '{"title":"Api Overview","required":["verifiable_password_authentication"],"type":"object","properties":{"verifiable_password_authentication":{"type":"boolean","examples":[true]},"ssh_key_fingerprints":{"type":"object","properties":{"SHA256_RSA":{"type":"string"},"SHA256_DSA":{"type":"string"},"SHA256_ECDSA":{"type":"string"},"SHA256_ED25519":{"type":"string"}}},"ssh_keys":{"type":"array","items":{"type":"string"},"examples":["ssh-ed25519 ABCDEFGHIJKLMNOPQRSTUVWXYZ"]},"hooks":{"type":"array","items":{"type":"string"},"examples":["192.0.2.1"]},"web":{"type":"array","items":{"type":"string"},"examples":["192.0.2.1"]},"api":{"type":"array","items":{"type":"string"},"examples":["192.0.2.1"]},"git":{"type":"array","items":{"type":"string"},"examples":["192.0.2.1"]},"packages":{"type":"array","items":{"type":"string"},"examples":["192.0.2.1"]},"pages":{"type":"array","items":{"type":"string"},"examples":["192.0.2.1"]},"importer":{"type":"array","items":{"type":"string"},"examples":["192.0.2.1"]},"actions":{"type":"array","items":{"type":"string"},"examples":["192.0.2.1"]},"dependabot":{"type":"array","items":{"type":"string"},"examples":["192.0.2.1"]}},"description":"Api Overview"}';
    public const SCHEMA_TITLE = 'Api Overview';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    public const SCHEMA_EXAMPLE_DATA = '{"verifiable_password_authentication":true,"ssh_key_fingerprints":{"SHA256_RSA":"generated_SHA256_RSA_null","SHA256_DSA":"generated_SHA256_DSA_null","SHA256_ECDSA":"generated_SHA256_ECDSA_null","SHA256_ED25519":"generated_SHA256_ED25519_null"},"ssh_keys":["ssh-ed25519 ABCDEFGHIJKLMNOPQRSTUVWXYZ"],"hooks":["192.0.2.1"],"web":["192.0.2.1"],"api":["192.0.2.1"],"git":["192.0.2.1"],"packages":["192.0.2.1"],"pages":["192.0.2.1"],"importer":["192.0.2.1"],"actions":["192.0.2.1"],"dependabot":["192.0.2.1"]}';
    /**
     * @param ?array<string> $sshKeys
     * @param ?array<string> $hooks
     * @param ?array<string> $web
     * @param ?array<string> $api
     * @param ?array<string> $git
     * @param ?array<string> $packages
     * @param ?array<string> $pages
     * @param ?array<string> $importer
     * @param ?array<string> $actions
     * @param ?array<string> $dependabot
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('verifiable_password_authentication')] public bool $verifiablePasswordAuthentication, #[\EventSauce\ObjectHydrator\MapFrom('ssh_key_fingerprints')] public ?Schema\ApiOverview\SshKeyFingerprints $sshKeyFingerprints, #[\EventSauce\ObjectHydrator\MapFrom('ssh_keys')] public ?array $sshKeys, public ?array $hooks, public ?array $web, public ?array $api, public ?array $git, public ?array $packages, public ?array $pages, public ?array $importer, public ?array $actions, public ?array $dependabot)
    {
    }
}
