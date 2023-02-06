<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListOrgSecrets\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","secrets"],"type":"object","properties":{"total_count":{"type":"integer"},"secrets":{"type":"array","items":{"title":"Dependabot Secret for an Organization","required":["name","created_at","updated_at","visibility"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["SECRET_TOKEN"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"visibility":{"enum":["all","private","selected"],"type":"string","description":"Visibility of a secret"},"selected_repositories_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/org\\/dependabot\\/secrets\\/my_secret\\/repositories"]}},"description":"Secrets for GitHub Dependabot for an organization."}}}}';
    public const SCHEMA_EXAMPLE = '{"secrets":[{"name":"SECRET_TOKEN","selected_repositories_url":"https:\\/\\/api.github.com\\/organizations\\/org\\/dependabot\\/secrets\\/my_secret\\/repositories"}]}';
    public const SCHEMA_TITLE = 'Operation\\ListOrgSecrets\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationDependabotSecret>
     */
    public readonly array $secrets;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationDependabotSecret> $secrets
     */
    public function __construct(int $total_count, array $secrets)
    {
        $this->total_count = $total_count;
        $this->secrets = $secrets;
    }
}
