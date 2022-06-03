<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions;

final class Permissions
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsRepository($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsRepository($owner, $repo);
    }
}
