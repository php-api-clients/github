<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json;

final class Repositories
{
    public const SCHEMA_JSON = '{"type":"string","description":"Repository path, owner and name","examples":["acme\\/widgets"]}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Json\\Repositories';
    public const SCHEMA_DESCRIPTION = 'Repository path, owner and name';
    public function __construct()
    {
    }
}
