<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Tag
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"digest":"generated_digest","name":"generated_name"}';
    public function __construct(public ?string $digest, public ?string $name)
    {
    }
}
