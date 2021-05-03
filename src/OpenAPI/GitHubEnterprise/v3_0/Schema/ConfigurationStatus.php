<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ConfigurationStatus
{
    public const SCHEMA_TITLE = 'configuration-status';
    public const SPL_HASH = '0000000065dd77fc000000006352672d';
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
