<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class NugetMetadata
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"oneOf":[{"type":"integer"},{"type":"string"}]},"name":{"type":"string"},"value":{"oneOf":[{"type":"boolean"},{"type":"string"},{"type":"integer"},{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"generated_id","name":"generated_name","value":{"url":"generated_url","branch":"generated_branch","commit":"generated_commit","type":"generated_type"}}';
    public function __construct(public ?string $id, public ?string $name, public ?Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata\Value $value)
    {
    }
}
