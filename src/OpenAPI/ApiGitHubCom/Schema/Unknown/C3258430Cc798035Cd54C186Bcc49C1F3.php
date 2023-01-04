<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C3258430Cc798035Cd54C186Bcc49C1F3
{
    public const SCHEMA_JSON = '{"required":["total_count","devcontainers"],"type":"object","properties":{"total_count":{"type":"integer"},"devcontainers":{"type":"array","items":{"required":["path"],"type":"object","properties":{"path":{"type":"string"},"name":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = 'c_3258430cc798035cd54c186bcc49c1f3';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C3258430Cc798035Cd54C186Bcc49C1F3\Devcontainers>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C3258430Cc798035Cd54C186Bcc49C1F3\Devcontainers::class)
     */
    private array $devcontainers = array();
    public function total_count() : int
    {
        return $this->total_count;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C3258430Cc798035Cd54C186Bcc49C1F3\Devcontainers>
     */
    public function devcontainers() : array
    {
        return $this->devcontainers;
    }
}
