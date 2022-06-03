<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class InteractionLimitResponse
{
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
