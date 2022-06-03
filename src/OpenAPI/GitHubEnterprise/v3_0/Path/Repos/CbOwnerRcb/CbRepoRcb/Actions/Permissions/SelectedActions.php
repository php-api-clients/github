<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions;

final class SelectedActions
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetAllowedActionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetAllowedActionsRepository($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\SetAllowedActionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\SetAllowedActionsRepository($owner, $repo);
    }
}
