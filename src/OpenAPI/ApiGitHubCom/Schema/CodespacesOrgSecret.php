<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodespacesOrgSecret
{
    public const SCHEMA_JSON = '{"title":"Codespaces Secret","required":["name","created_at","updated_at","visibility"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret","examples":["SECRET_NAME"]},"created_at":{"type":"string","description":"The date and time at which the secret was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time"},"updated_at":{"type":"string","description":"The date and time at which the secret was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time"},"visibility":{"enum":["all","private","selected"],"type":"string","description":"The type of repositories in the organization that the secret is visible to"},"selected_repositories_url":{"type":"string","description":"The API URL at which the list of repositories this secret is visible to can be retrieved","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/ORGANIZATION\\/codespaces\\/secrets\\/SECRET_NAME\\/repositories"]}},"description":"Secrets for a GitHub Codespace."}';
    public const SCHEMA_TITLE = 'Codespaces Secret';
    public const SCHEMA_DESCRIPTION = 'Secrets for a GitHub Codespace.';
    /**
     * The name of the secret
     */
    private string $name;
    /**
     * The date and time at which the secret was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    private string $created_at;
    /**
     * The date and time at which the secret was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    private string $updated_at;
    /**
     * The type of repositories in the organization that the secret is visible to
     */
    private string $visibility;
    /**
     * The API URL at which the list of repositories this secret is visible to can be retrieved
     */
    private ?string $selected_repositories_url = null;
    /**
     * The name of the secret
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The date and time at which the secret was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * The date and time at which the secret was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * The type of repositories in the organization that the secret is visible to
     */
    public function visibility() : string
    {
        return $this->visibility;
    }
    /**
     * The API URL at which the list of repositories this secret is visible to can be retrieved
     */
    public function selected_repositories_url() : ?string
    {
        return $this->selected_repositories_url;
    }
}
