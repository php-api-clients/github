<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class InteractionExpiry
{
    public const SCHEMA_TITLE = 'interaction-expiry';
    public const SCHEMA_DESCRIPTION = 'The duration of the interaction restriction. Can be one of: `one_day`, `three_days`, `one_week`, `one_month`, `six_months`. Default: `one_day`.';
}
