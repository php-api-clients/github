<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateColumn\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the project column","examples":["Remaining tasks"]}}}';
    public const SCHEMA_EXAMPLE = '{"name":"Remaining tasks"}';
    public const SCHEMA_TITLE = 'CreateColumn\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Name of the project column
     */
    public readonly string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
