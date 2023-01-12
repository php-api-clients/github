<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateForOrg\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the project."},"body":{"type":"string","description":"The description of the project."}}}';
    public const SCHEMA_TITLE = 'CreateForOrg\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the project.
     */
    private string $name;
    /**
     * The description of the project.
     */
    private ?string $body = null;
    /**
     * The name of the project.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The description of the project.
     */
    public function body() : ?string
    {
        return $this->body;
    }
}
