<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use ApiClients\Client\GitHub\Schema;

final readonly class NugetMetadata
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"id":{"type":["null","string","object","integer"],"oneOf":[{"type":"string"},{"type":"object"},{"type":"integer"}]},"name":{"type":"string"},"value":{"oneOf":[{"type":"boolean"},{"type":"string"},{"type":"integer"},{"type":"object","properties":{"url":{"type":"string"},"branch":{"type":"string"},"commit":{"type":"string"},"type":{"type":"string"}}}]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":null,"name":"generated","value":null}';

    public function __construct(public null|string|Schema\WebhookDeploymentCreated\Deployment\Payload\Zero|int $id, public ?string $name, public null|bool|string|int|Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata\Value\Three $value)
    {
    }
}
