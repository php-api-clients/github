<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ProtectedBranchRequiredStatusCheck
{
    public const SCHEMA_TITLE = 'Protected Branch Required Status Check';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Required Status Check';
    private ?string $url = null;
    private ?string $enforcement_level = null;
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
