<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class NugetMetadata
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":["null","string","object","integer"],"oneOf":[{"type":"string"},{"type":"object"},{"type":"integer"}]},"name":{"type":"string"},"value":{"oneOf":[{"type":"boolean"},{"type":"string"},{"type":"integer"},{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"generated_id_null","name":"generated_name_null","value":false}';
    public function __construct(public ?string $id, public ?string $name, public ?bool $value)
    {
    }
}
