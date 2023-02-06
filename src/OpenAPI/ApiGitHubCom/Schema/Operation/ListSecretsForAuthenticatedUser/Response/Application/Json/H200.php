<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListSecretsForAuthenticatedUser\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","secrets"],"type":"object","properties":{"total_count":{"type":"integer"},"secrets":{"type":"array","items":{"title":"Codespaces Secret","required":["name","created_at","updated_at","visibility","selected_repositories_url"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret","examples":["SECRET_NAME"]},"created_at":{"type":"string","description":"The date and time at which the secret was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time"},"updated_at":{"type":"string","description":"The date and time at which the secret was last updated, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time"},"visibility":{"enum":["all","private","selected"],"type":"string","description":"The type of repositories in the organization that the secret is visible to"},"selected_repositories_url":{"type":"string","description":"The API URL at which the list of repositories this secret is visible to can be retrieved","format":"uri","examples":["https:\\/\\/api.github.com\\/user\\/secrets\\/SECRET_NAME\\/repositories"]}},"description":"Secrets for a GitHub Codespace."}}}}';
    public const SCHEMA_EXAMPLE = '{"secrets":[{"name":"SECRET_NAME","selected_repositories_url":"https:\\/\\/api.github.com\\/user\\/secrets\\/SECRET_NAME\\/repositories"}]}';
    public const SCHEMA_TITLE = 'Operation\\ListSecretsForAuthenticatedUser\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesSecret>
     */
    public readonly array $secrets;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespacesSecret> $secrets
     */
    public function __construct(int $total_count, array $secrets)
    {
        $this->total_count = $total_count;
        $this->secrets = $secrets;
    }
}
