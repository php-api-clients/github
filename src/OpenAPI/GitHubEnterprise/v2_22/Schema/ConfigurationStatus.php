<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ConfigurationStatus
{
    public const SCHEMA_TITLE = 'configuration-status';
    public const SPL_HASH = '000000004a4bac0b0000000021d13a21';
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
