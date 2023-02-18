<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPackagePublished\Package\PackageVersion;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckSuiteCompleted\ActionsMeta;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag;

final readonly class ContainerMetadata
{
    public const SCHEMA_JSON        = '{"type":["object","null"],"properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?ActionsMeta $labels;
    public ?ActionsMeta $manifest;
    public ?Tag $tag;

    public function __construct(ActionsMeta $labels, ActionsMeta $manifest, Tag $tag)
    {
        $this->labels   = $labels;
        $this->manifest = $manifest;
        $this->tag      = $tag;
    }
}
