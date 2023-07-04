<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\GitHub\Schema;

final readonly class ContainerMetadata
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"labels":[],"manifest":[],"tag":{"digest":"generated","name":"generated"}}';

    public function __construct(public Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Labels|null $labels, public Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Manifest|null $manifest, public Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag|null $tag)
    {
    }
}
