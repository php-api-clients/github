<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class RequiredStatusChecksEnforcementLevel
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"enum":["off","non_admins","everyone"],"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Changes\\RequiredStatusChecksEnforcementLevel';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $from;
    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
