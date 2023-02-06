<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsDefaultWorkflowPermissions
{
    public const SCHEMA_JSON = '{"enum":["read","write"],"type":"string","description":"The default workflow permissions granted to the GITHUB_TOKEN when running workflows."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'actions-default-workflow-permissions';
    public const SCHEMA_DESCRIPTION = 'The default workflow permissions granted to the GITHUB_TOKEN when running workflows.';
    public function __construct()
    {
    }
}
