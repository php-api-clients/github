<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RepoCodespacesSecret
{
    public const SCHEMA_JSON = '{"title":"Codespaces Secret","required":["name","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["SECRET_TOKEN"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}},"description":"Set repository secrets for GitHub Codespaces."}';
    public const SCHEMA_EXAMPLE = '{"name":"SECRET_TOKEN"}';
    public const SCHEMA_TITLE = 'Codespaces Secret';
    public const SCHEMA_DESCRIPTION = 'Set repository secrets for GitHub Codespaces.';
    /**
     * The name of the secret.
     */
    public readonly string $name;
    public readonly string $created_at;
    public readonly string $updated_at;
    public function __construct(string $name, string $created_at, string $updated_at)
    {
        $this->name = $name;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
