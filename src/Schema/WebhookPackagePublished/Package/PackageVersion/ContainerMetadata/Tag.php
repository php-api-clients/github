<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata;

final readonly class Tag
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"digest":"generated","name":"generated"}';

    public function __construct(public ?string $digest, public ?string $name)
    {
    }
}
