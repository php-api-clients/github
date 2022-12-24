<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CB8B0062275Ac8Fcd83D38889Dda5Afce
{
    public const SCHEMA_JSON = '{"required":["read","write","admin"],"type":"object","properties":{"read":{"type":"boolean"},"write":{"type":"boolean"},"admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'c_b8b0062275ac8fcd83d38889dda5afce';
    public const SCHEMA_DESCRIPTION = '';
    private bool $read;
    private bool $write;
    private bool $admin;
    public function read() : bool
    {
        return $this->read;
    }
    public function write() : bool
    {
        return $this->write;
    }
    public function admin() : bool
    {
        return $this->admin;
    }
}
