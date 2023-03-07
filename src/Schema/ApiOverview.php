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
    public const SCHEMA_JSON = '{"title":"Api Overview","required":["verifiable_password_authentication"],"type":"object","properties":{"verifiable_password_authentication":{"type":"boolean","examples":[true]},"ssh_key_fingerprints":{"type":"object","properties":{"SHA256_RSA":{"type":"string"},"SHA256_DSA":{"type":"string"},"SHA256_ECDSA":{"type":"string"},"SHA256_ED25519":{"type":"string"}}},"ssh_keys":{"type":"array","items":{"type":"string"},"examples":["ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIOMqqnkVzrm0SdG6UOoqKLsabgH5C9okWi0dh2l9GKJl"]},"hooks":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"web":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"api":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"git":{"type":"array","items":{"type":"string"},"examples":["127.0.0.1\\/32"]},"packages":{"type":"array","items":{"type":"string"},"examples":["13.65.0.0\\/16","157.55.204.33\\/32","2a01:111:f403:f90c::\\/62"]},"pages":{"type":"array","items":{"type":"string"},"examples":["192.30.252.153\\/32","192.30.252.154\\/32"]},"importer":{"type":"array","items":{"type":"string"},"examples":["54.158.161.132","54.226.70.38"]},"actions":{"type":"array","items":{"type":"string"},"examples":["13.64.0.0\\/16","13.65.0.0\\/16"]},"dependabot":{"type":"array","items":{"type":"string"},"examples":["192.168.7.15\\/32","192.168.7.16\\/32"]}},"description":"Api Overview"}';
    public const SCHEMA_TITLE = 'Api Overview';
    public const SCHEMA_DESCRIPTION = 'Api Overview';
    public const SCHEMA_EXAMPLE_DATA = '{"verifiable_password_authentication":true,"ssh_key_fingerprints":{"SHA256_RSA":"generated_SHA256_RSA","SHA256_DSA":"generated_SHA256_DSA","SHA256_ECDSA":"generated_SHA256_ECDSA","SHA256_ED25519":"generated_SHA256_ED25519"},"ssh_keys":["ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIOMqqnkVzrm0SdG6UOoqKLsabgH5C9okWi0dh2l9GKJl"],"hooks":["127.0.0.1\\/32"],"web":["127.0.0.1\\/32"],"api":["127.0.0.1\\/32"],"git":["127.0.0.1\\/32"],"packages":["13.65.0.0\\/16"],"pages":["192.30.252.153\\/32"],"importer":["54.158.161.132"],"actions":["13.64.0.0\\/16"],"dependabot":["192.168.7.15\\/32"]}';
    /**
     * @param array<string> $ssh_keys
     * @param array<string> $hooks
     * @param array<string> $web
     * @param array<string> $api
     * @param array<string> $git
     * @param array<string> $packages
     * @param array<string> $pages
     * @param array<string> $importer
     * @param array<string> $actions
     * @param array<string> $dependabot
     */
    public function __construct(public ?bool $verifiable_password_authentication, public Schema\ApiOverview\SshKeyFingerprints $ssh_key_fingerprints, public array $ssh_keys, public array $hooks, public array $web, public array $api, public array $git, public array $packages, public array $pages, public array $importer, public array $actions, public array $dependabot)
    {
    }
}
