<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class DependabotSecret
{
    public const SCHEMA_JSON = '{"title":"Dependabot Secret","required":["name","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["MY_ARTIFACTORY_PASSWORD"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}},"description":"Set secrets for Dependabot."}';
    public const SCHEMA_EXAMPLE = '{"name":"MY_ARTIFACTORY_PASSWORD"}';
    public const SCHEMA_TITLE = 'Dependabot Secret';
    public const SCHEMA_DESCRIPTION = 'Set secrets for Dependabot.';
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
