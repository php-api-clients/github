<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class DeploymentReviewerType
{
    public const SCHEMA_JSON = '{"enum":["User","Team"],"type":"string","description":"The type of reviewer.","examples":["User"]}';
    public const SCHEMA_TITLE = 'deployment-reviewer-type';
    public const SCHEMA_DESCRIPTION = 'The type of reviewer.';
    public function __construct()
    {
    }
}
