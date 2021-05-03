<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class ConfigurationStatus
{
    public const SCHEMA_TITLE = 'configuration-status';
    public const SPL_HASH = '000000002eab1f5400000000697c5254';
    public const SCHEMA_DESCRIPTION = '';
    private string $status;
    private array $progress;
    public function status() : string
    {
        return $this->status;
    }
    public function progress() : array
    {
        return $this->progress;
    }
}
