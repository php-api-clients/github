<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ConfigurationStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"type":"string"},"progress":{"type":"array","items":{"required":["status","key"],"type":"object","properties":{"status":{"type":"string"},"key":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = 'configuration-status';
    public const SCHEMA_DESCRIPTION = '';
    private string $status;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C71588500593B587713Dbffad67D40783>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C71588500593B587713Dbffad67D40783::class)
     */
    private array $progress = array();
    public function status() : string
    {
        return $this->status;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C71588500593B587713Dbffad67D40783>
     */
    public function progress() : array
    {
        return $this->progress;
    }
}
