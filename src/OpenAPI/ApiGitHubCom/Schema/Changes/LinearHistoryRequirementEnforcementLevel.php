<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class LinearHistoryRequirementEnforcementLevel
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}}';
    public const SCHEMA_TITLE = 'Changes\\LinearHistoryRequirementEnforcementLevel';
    public const SCHEMA_DESCRIPTION = '';
    private string $from;
    public function from() : string
    {
        return $this->from;
    }
}
