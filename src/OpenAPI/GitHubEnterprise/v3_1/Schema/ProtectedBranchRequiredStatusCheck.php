<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ProtectedBranchRequiredStatusCheck
{
    public const SCHEMA_JSON = '{"title":"Protected Branch Required Status Check","required":["contexts"],"type":"object","properties":{"url":{"type":"string"},"enforcement_level":{"type":"string"},"contexts":{"type":"array","items":{"type":"string"}},"contexts_url":{"type":"string"},"strict":{"type":"boolean"}},"description":"Protected Branch Required Status Check"}';
    public const SCHEMA_TITLE = 'Protected Branch Required Status Check';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Required Status Check';
    private ?string $url = null;
    private ?string $enforcement_level = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchRequiredStatusCheck\Contexts>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchRequiredStatusCheck\Contexts::class)
     */
    private array $contexts = array();
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
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchRequiredStatusCheck\Contexts>
     */
    public function contexts() : array
    {
        return $this->contexts;
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
