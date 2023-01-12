<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrganizationActionsVariable
{
    public const SCHEMA_JSON = '{"title":"Actions Variable for an Organization","required":["name","value","created_at","updated_at","visibility"],"type":"object","properties":{"name":{"type":"string","description":"The name of the variable.","examples":["USERNAME"]},"value":{"type":"string","description":"The value of the variable.","examples":["octocat"]},"created_at":{"type":"string","description":"The date and time at which the variable was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"updated_at":{"type":"string","description":"The date and time at which the variable was last updated, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"visibility":{"enum":["all","private","selected"],"type":"string","description":"Visibility of a variable"},"selected_repositories_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/org\\/variables\\/USERNAME\\/repositories"]}},"description":"Organization variable for GitHub Actions."}';
    public const SCHEMA_TITLE = 'Actions Variable for an Organization';
    public const SCHEMA_DESCRIPTION = 'Organization variable for GitHub Actions.';
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
     * Visibility of a variable
     */
    private string $visibility;
    private ?string $selected_repositories_url = null;
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
    /**
     * Visibility of a variable
     */
    public function visibility() : string
    {
        return $this->visibility;
    }
    public function selected_repositories_url() : ?string
    {
        return $this->selected_repositories_url;
    }
}
