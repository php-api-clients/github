<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class StatusCheckPolicy
{
    public const SCHEMA_TITLE = 'Status Check Policy';
    public const SCHEMA_DESCRIPTION = 'Status Check Policy';
    private string $url;
    private bool $strict;
    private array $contexts = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy\Checks>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy\Checks::class)
     */
    private array $checks = array();
    private string $contexts_url;
    public function url() : string
    {
        return $this->url;
    }
    public function strict() : bool
    {
        return $this->strict;
    }
    public function contexts() : array
    {
        return $this->contexts;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\StatusCheckPolicy\Checks>
     */
    public function checks() : array
    {
        return $this->checks;
    }
    public function contexts_url() : string
    {
        return $this->contexts_url;
    }
}
