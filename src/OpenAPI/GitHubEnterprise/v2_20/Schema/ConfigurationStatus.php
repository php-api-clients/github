<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class ConfigurationStatus
{
    public const SCHEMA_TITLE = 'configuration-status';
    public const SPL_HASH = '000000001c238c9b000000003890ca58';
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
