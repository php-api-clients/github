<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateForRepo\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the project."},"body":{"type":"string","description":"The description of the project."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CreateForRepo\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the project.
     */
    public readonly string $name;
    /**
     * The description of the project.
     */
    public readonly ?string $body;
    public function __construct(string $name, string $body)
    {
        $this->name = $name;
        $this->body = $body;
    }
}
