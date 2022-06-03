<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ConfigurationStatus
{
    public const SCHEMA_TITLE = 'configuration-status';
    public const SCHEMA_DESCRIPTION = '';
    private string $status;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ConfigurationStatus\Progress>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ConfigurationStatus\Progress::class)
     */
    private array $progress = array();
    public function status() : string
    {
        return $this->status;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ConfigurationStatus\Progress>
     */
    public function progress() : array
    {
        return $this->progress;
    }
}
