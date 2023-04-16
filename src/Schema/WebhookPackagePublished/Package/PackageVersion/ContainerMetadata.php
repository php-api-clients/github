<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class ContainerMetadata
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"labels":null,"manifest":null,"tag":{"digest":"generated_digest_null","name":"generated_name_null"}}';
    public function __construct(public mixed $labels, public mixed $manifest, public ?Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag $tag)
    {
    }
}
