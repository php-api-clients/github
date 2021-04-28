<?php

namespace ApiClients\Client\Github\OpenAPI\Schema;

final class StatusCheckPolicy
{
    public const SCHEMA_TITLE = 'Status Check Policy';
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
