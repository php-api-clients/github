<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class InteractionLimit
{
    public const SCHEMA_JSON = '{"title":"Interaction Restrictions","required":["limit"],"type":"object","properties":{"limit":{"enum":["existing_users","contributors_only","collaborators_only"],"type":"string","description":"The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.","examples":["collaborators_only"]},"expiry":{"enum":["one_day","three_days","one_week","one_month","six_months"],"type":"string","description":"The duration of the interaction restriction. Default: `one_day`.","examples":["one_month"]}},"description":"Limit interactions to a specific type of user for a specified duration"}';
    public const SCHEMA_EXAMPLE = '{"limit":"collaborators_only","expiry":"one_month"}';
    public const SCHEMA_TITLE = 'Interaction Restrictions';
    public const SCHEMA_DESCRIPTION = 'Limit interactions to a specific type of user for a specified duration';
    /**
     * The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.
     */
    public readonly string $limit;
    /**
     * The duration of the interaction restriction. Default: `one_day`.
     */
    public readonly ?string $expiry;
    public function __construct(string $limit, string $expiry)
    {
        $this->limit = $limit;
        $this->expiry = $expiry;
    }
}
