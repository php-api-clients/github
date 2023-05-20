<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Schema;

final readonly class ContainerMetadata
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"labels":"generated","manifest":"generated","tag":{"digest":"generated","name":"generated"}}';

    public function __construct(public string $labels, public string $manifest, public ?Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag $tag)
    {
    }
}
