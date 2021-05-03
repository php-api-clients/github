<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class StatusCheckPolicy
{
    public const SCHEMA_TITLE = 'Status Check Policy';
    public const SPL_HASH = '0000000037ddbe590000000010a967e8';
    public const SCHEMA_DESCRIPTION = 'Status Check Policy';
    private string $url;
    private bool $strict;
    private array $contexts;
    private string $contexts_url;
    public function url() : string
    {
        return $this->url;
    }
    public function strict() : bool
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
