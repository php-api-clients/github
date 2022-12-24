<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class InteractionLimit
{
    public const SCHEMA_JSON = '{"title":"Interaction Restrictions","required":["limit"],"type":"object","properties":{"limit":{"enum":["existing_users","contributors_only","collaborators_only"],"type":"string","description":"The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.","examples":["collaborators_only"]},"expiry":{"enum":["one_day","three_days","one_week","one_month","six_months"],"type":"string","description":"The duration of the interaction restriction. Default: `one_day`.","examples":["one_month"]}},"description":"Limit interactions to a specific type of user for a specified duration"}';
    public const SCHEMA_TITLE = 'Interaction Restrictions';
    public const SCHEMA_DESCRIPTION = 'Limit interactions to a specific type of user for a specified duration';
    /**
     * The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.
     */
    private string $limit;
    /**
     * The duration of the interaction restriction. Default: `one_day`.
     */
    private ?string $expiry = null;
    /**
     * The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.
     */
    public function limit() : string
    {
        return $this->limit;
    }
    /**
     * The duration of the interaction restriction. Default: `one_day`.
     */
    public function expiry() : ?string
    {
        return $this->expiry;
    }
}
