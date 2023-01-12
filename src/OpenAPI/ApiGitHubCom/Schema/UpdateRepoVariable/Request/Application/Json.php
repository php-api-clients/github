<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateRepoVariable\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the variable."},"value":{"type":"string","description":"The value of the variable."}}}';
    public const SCHEMA_TITLE = 'UpdateRepoVariable\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the variable.
     */
    private string $name;
    /**
     * The value of the variable.
     */
    private string $value;
    /**
     * The name of the variable.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The value of the variable.
     */
    public function value() : string
    {
        return $this->value;
    }
}
