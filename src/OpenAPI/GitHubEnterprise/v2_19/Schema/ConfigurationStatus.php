<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class ConfigurationStatus
{
    public const SCHEMA_TITLE = 'configuration-status';
    public const SPL_HASH = '0000000018314493000000004028667d';
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
