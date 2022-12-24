<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class InteractionLimitResponse
{
    public const SCHEMA_JSON = '{"title":"Interaction Limits","required":["limit","origin","expires_at"],"type":"object","properties":{"limit":{"enum":["existing_users","contributors_only","collaborators_only"],"type":"string","description":"The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.","examples":["collaborators_only"]},"origin":{"type":"string","examples":["repository"]},"expires_at":{"type":"string","format":"date-time","examples":["2018-08-17T04:18:39Z"]}},"description":"Interaction limit settings."}';
    public const SCHEMA_TITLE = 'Interaction Limits';
    public const SCHEMA_DESCRIPTION = 'Interaction limit settings.';
    /**
     * The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.
     */
    private string $limit;
    private string $origin;
    private string $expires_at;
    /**
     * The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.
     */
    public function limit() : string
    {
        return $this->limit;
    }
    public function origin() : string
    {
        return $this->origin;
    }
    public function expires_at() : string
    {
        return $this->expires_at;
    }
}
