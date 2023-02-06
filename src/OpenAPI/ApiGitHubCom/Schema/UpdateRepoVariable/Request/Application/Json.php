<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateRepoVariable\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the variable."},"value":{"type":"string","description":"The value of the variable."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'UpdateRepoVariable\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the variable.
     */
    public readonly string $name;
    /**
     * The value of the variable.
     */
    public readonly string $value;
    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
}
