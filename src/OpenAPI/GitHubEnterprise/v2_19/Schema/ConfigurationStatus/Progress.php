<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\ConfigurationStatus;

final class Progress
{
    public const SCHEMA_TITLE = 'configuration-status::progress';
    public const SCHEMA_DESCRIPTION = '';
    private string $status;
    private string $key;
    public function status() : string
    {
        return $this->status;
    }
    public function key() : string
    {
        return $this->key;
    }
}
