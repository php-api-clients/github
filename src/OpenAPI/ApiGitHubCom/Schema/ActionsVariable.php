<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsVariable
{
    public const SCHEMA_JSON = '{"title":"Actions Variable","required":["name","value","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the variable.","examples":["USERNAME"]},"value":{"type":"string","description":"The value of the variable.","examples":["octocat"]},"created_at":{"type":"string","description":"The date and time at which the variable was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"updated_at":{"type":"string","description":"The date and time at which the variable was last updated, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]}}}';
    public const SCHEMA_TITLE = 'Actions Variable';
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
     * The date and time at which the variable was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    private string $created_at;
    /**
     * The date and time at which the variable was last updated, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    private string $updated_at;
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
    /**
     * The date and time at which the variable was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * The date and time at which the variable was last updated, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
