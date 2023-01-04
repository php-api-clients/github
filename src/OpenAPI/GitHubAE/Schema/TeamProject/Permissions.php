<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\TeamProject;

final class Permissions
{
    public const SCHEMA_JSON = '{"required":["read","write","admin"],"type":"object","properties":{"read":{"type":"boolean"},"write":{"type":"boolean"},"admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'TeamProject\\Permissions';
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
