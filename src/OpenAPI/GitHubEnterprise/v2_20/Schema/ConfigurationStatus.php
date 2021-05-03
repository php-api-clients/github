<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class ConfigurationStatus
{
    public const SCHEMA_TITLE = 'configuration-status';
    public const SPL_HASH = '000000005d4ce78f000000005494ca51';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $status = null;
    private array $progress = array();
    public function status() : ?string
    {
        return $this->status;
    }
    public function progress() : array
    {
        return $this->progress;
    }
}
