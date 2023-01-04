<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ProtectedBranchRequiredStatusCheck
{
    public const SCHEMA_JSON = '{"title":"Protected Branch Required Status Check","required":["contexts","checks"],"type":"object","properties":{"url":{"type":"string"},"enforcement_level":{"type":"string"},"contexts":{"type":"array","items":{"type":"string"}},"checks":{"type":"array","items":{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string"},"app_id":{"type":["integer","null"]}}}},"contexts_url":{"type":"string"},"strict":{"type":"boolean"}},"description":"Protected Branch Required Status Check"}';
    public const SCHEMA_TITLE = 'Protected Branch Required Status Check';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Required Status Check';
    private ?string $url = null;
    private ?string $enforcement_level = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchRequiredStatusCheck\Contexts>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchRequiredStatusCheck\Contexts::class)
     */
    private array $contexts = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchRequiredStatusCheck\Checks>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchRequiredStatusCheck\Checks::class)
     */
    private array $checks = array();
    private ?string $contexts_url = null;
    private ?bool $strict = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function enforcement_level() : ?string
    {
        return $this->enforcement_level;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchRequiredStatusCheck\Contexts>
     */
    public function contexts() : array
    {
        return $this->contexts;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ProtectedBranchRequiredStatusCheck\Checks>
     */
    public function checks() : array
    {
        return $this->checks;
    }
    public function contexts_url() : ?string
    {
        return $this->contexts_url;
    }
    public function strict() : ?bool
    {
        return $this->strict;
    }
}
