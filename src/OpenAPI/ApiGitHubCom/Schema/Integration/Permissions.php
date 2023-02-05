<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration;

final class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"issues":{"type":"string"},"checks":{"type":"string"},"metadata":{"type":"string"},"contents":{"type":"string"},"deployments":{"type":"string"}},"description":"The set of permissions for the GitHub app","example":{"issues":"read","deployments":"write"},"additionalProperties":{"type":"string"}}';
    public const SCHEMA_TITLE = 'Integration\\Permissions';
    public const SCHEMA_DESCRIPTION = 'The set of permissions for the GitHub app';
    public readonly string $issues;
    public readonly string $checks;
    public readonly string $metadata;
    public readonly string $contents;
    public readonly string $deployments;
    public function __construct(string $issues, string $checks, string $metadata, string $contents, string $deployments)
    {
        $this->issues = $issues;
        $this->checks = $checks;
        $this->metadata = $metadata;
        $this->contents = $contents;
        $this->deployments = $deployments;
    }
}
