<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class PreReceiveHooks
{
    function get($owner, $repo, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\ListPreReceiveHooksForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\ListPreReceiveHooksForRepo($owner, $repo, $per_page, $page, $direction, $sort);
    }
}
