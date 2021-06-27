<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions;

final class Permissions
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsRepository($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsRepository($owner, $repo);
    }
}
