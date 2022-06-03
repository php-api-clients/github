<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\Permissions;

final class Workflow
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsEnterprise($enterprise);
    }
    function put($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsEnterprise($enterprise);
    }
}
