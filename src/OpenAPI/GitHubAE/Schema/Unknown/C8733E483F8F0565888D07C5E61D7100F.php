<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C8733E483F8F0565888D07C5E61D7100F
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"issues":{"type":"string"},"checks":{"type":"string"},"metadata":{"type":"string"},"contents":{"type":"string"},"deployments":{"type":"string"}},"description":"The set of permissions for the GitHub app","example":{"issues":"read","deployments":"write"},"additionalProperties":{"type":"string"}}';
    public const SCHEMA_TITLE = 'c_8733e483f8f0565888d07c5e61d7100f';
    public const SCHEMA_DESCRIPTION = 'The set of permissions for the GitHub app';
    private string $issues;
    private string $checks;
    private string $metadata;
    private string $contents;
    private string $deployments;
    public function issues() : string
    {
        return $this->issues;
    }
    public function checks() : string
    {
        return $this->checks;
    }
    public function metadata() : string
    {
        return $this->metadata;
    }
    public function contents() : string
    {
        return $this->contents;
    }
    public function deployments() : string
    {
        return $this->deployments;
    }
}
