<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion;

final readonly class DockerMetadata
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"tags":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tags":["generated","generated"]}';

    public function __construct(public array|null $tags)
    {
    }
}
