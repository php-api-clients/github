<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject;

final class Permissions
{
    public const SCHEMA_JSON = '{"required":["read","write","admin"],"type":"object","properties":{"read":{"type":"boolean"},"write":{"type":"boolean"},"admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'TeamProject\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    public readonly bool $read;
    public readonly bool $write;
    public readonly bool $admin;
    public function __construct(bool $read, bool $write, bool $admin)
    {
        $this->read = $read;
        $this->write = $write;
        $this->admin = $admin;
    }
}
