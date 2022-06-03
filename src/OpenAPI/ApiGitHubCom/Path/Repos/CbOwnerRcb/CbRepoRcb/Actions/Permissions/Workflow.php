<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions;

final class Workflow
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository($owner, $repo);
    }
}
