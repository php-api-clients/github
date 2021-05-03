<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class InteractionLimit
{
    public const SCHEMA_TITLE = 'Interaction Restrictions';
    public const SPL_HASH = '0000000054d5f9280000000071115dec';
    public const SCHEMA_DESCRIPTION = 'Limit interactions to a specific type of user for a specified duration';
    /**
     * The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect. Can be one of: `existing_users`, `contributors_only`, `collaborators_only`.
     */
    private string $limit;
    /**
     * The duration of the interaction restriction. Can be one of: `one_day`, `three_days`, `one_week`, `one_month`, `six_months`. Default: `one_day`.
     */
    private string $expiry;
    public function limit() : string
    {
        return $this->limit;
    }
    public function expiry() : string
    {
        return $this->expiry;
    }
}
