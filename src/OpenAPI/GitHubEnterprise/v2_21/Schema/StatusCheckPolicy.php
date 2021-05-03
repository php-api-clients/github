<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class StatusCheckPolicy
{
    public const SCHEMA_TITLE = 'Status Check Policy';
    public const SPL_HASH = '0000000065d65b32000000007ce49c9a';
    public const SCHEMA_DESCRIPTION = 'Status Check Policy';
    private string $url;
    private boolean $strict;
    private array $contexts;
    private string $contexts_url;
    public function url() : string
    {
        return $this->url;
    }
    public function strict() : boolean
    {
        return $this->strict;
    }
    public function contexts() : array
    {
        return $this->contexts;
    }
    public function contexts_url() : string
    {
        return $this->contexts_url;
    }
}
