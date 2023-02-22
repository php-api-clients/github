<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration;

final readonly class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"issues":{"type":"string"},"checks":{"type":"string"},"metadata":{"type":"string"},"contents":{"type":"string"},"deployments":{"type":"string"}},"description":"The set of permissions for the GitHub app","example":{"issues":"read","deployments":"write"},"additionalProperties":{"type":"string"}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The set of permissions for the GitHub app';
    public ?string $issues;
    public ?string $checks;
    public ?string $metadata;
    public ?string $contents;
    public ?string $deployments;
    public function __construct(string $issues, string $checks, string $metadata, string $contents, string $deployments)
    {
        $this->issues = $issues;
        $this->checks = $checks;
        $this->metadata = $metadata;
        $this->contents = $contents;
        $this->deployments = $deployments;
    }
}
