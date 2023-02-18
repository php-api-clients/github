<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata;

final readonly class Tag
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $digest;
    public ?string $name;

    public function __construct(string $digest, string $name)
    {
        $this->digest = $digest;
        $this->name   = $name;
    }
}
