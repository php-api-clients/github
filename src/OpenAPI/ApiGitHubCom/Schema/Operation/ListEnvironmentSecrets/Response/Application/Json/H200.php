<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListEnvironmentSecrets\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"required":["total_count","secrets"],"type":"object","properties":{"total_count":{"type":"integer"},"secrets":{"type":"array","items":{"title":"Actions Secret","required":["name","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["SECRET_TOKEN"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}},"description":"Set secrets for GitHub Actions."}}}}';
    public const SCHEMA_EXAMPLE = '{"secrets":[{"name":"SECRET_TOKEN"}]}';
    public const SCHEMA_TITLE = 'Operation\\ListEnvironmentSecrets\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsSecret>
     */
    public readonly array $secrets;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsSecret> $secrets
     */
    public function __construct(int $total_count, array $secrets)
    {
        $this->total_count = $total_count;
        $this->secrets = $secrets;
    }
}
