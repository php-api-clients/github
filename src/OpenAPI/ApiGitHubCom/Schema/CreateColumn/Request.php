<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateColumn;

final class Request
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the project column","examples":["Remaining tasks"]}}}';
    public const SCHEMA_TITLE = 'CreateColumn\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Name of the project column
     */
    private string $name;
    /**
     * Name of the project column
     */
    public function name() : string
    {
        return $this->name;
    }
}
