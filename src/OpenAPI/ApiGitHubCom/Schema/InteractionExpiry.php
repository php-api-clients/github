<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class InteractionExpiry
{
    public const SCHEMA_JSON = '{"enum":["one_day","three_days","one_week","one_month","six_months"],"type":"string","description":"The duration of the interaction restriction. Default: `one_day`.","examples":["one_month"]}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'interaction-expiry';
    public const SCHEMA_DESCRIPTION = 'The duration of the interaction restriction. Default: `one_day`.';
    public function __construct()
    {
    }
}
