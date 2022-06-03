<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions;

final class SelectedActions
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetAllowedActionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetAllowedActionsRepository($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetAllowedActionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetAllowedActionsRepository($owner, $repo);
    }
}
