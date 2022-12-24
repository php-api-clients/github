<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C60C051Ca0D5D3B740Bd08E439D5315E1
{
    public const SCHEMA_JSON = '{"required":["total_count","secrets"],"type":"object","properties":{"total_count":{"type":"integer"},"secrets":{"type":"array","items":{"title":"Codespaces Secret","required":["name","created_at","updated_at","visibility","selected_repositories_url"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret","examples":["SECRET_NAME"]},"created_at":{"type":"string","description":"The date and time at which the secret was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time"},"updated_at":{"type":"string","description":"The date and time at which the secret was last updated, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time"},"visibility":{"enum":["all","private","selected"],"type":"string","description":"The type of repositories in the organization that the secret is visible to"},"selected_repositories_url":{"type":"string","description":"The API URL at which the list of repositories this secret is visible to can be retrieved","format":"uri","examples":["https:\\/\\/api.github.com\\/user\\/secrets\\/SECRET_NAME\\/repositories"]}},"description":"Secrets for a GitHub Codespace."}}}}';
    public const SCHEMA_TITLE = 'c_60c051ca0d5d3b740bd08e439d5315e1';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesSecret>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesSecret::class)
     */
    private array $secrets = array();
    public function total_count() : int
    {
        return $this->total_count;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesSecret>
     */
    public function secrets() : array
    {
        return $this->secrets;
    }
}
