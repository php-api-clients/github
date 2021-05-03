<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class ConfigurationStatus
{
    public const SCHEMA_TITLE = 'configuration-status';
    public const SPL_HASH = '0000000065d623de000000007ce49c9a';
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
