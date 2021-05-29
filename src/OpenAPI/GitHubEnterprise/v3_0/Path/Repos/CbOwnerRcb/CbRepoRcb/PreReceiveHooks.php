<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\ListPreReceiveHooksForRepoOperation;

final class PreReceiveHooks
{
    function get($owner, $repo, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created'): ListPreReceiveHooksForRepoOperation
    {
        return new ListPreReceiveHooksForRepoOperation($owner, $repo, $per_page, $page, $direction, $sort);
    }
}
