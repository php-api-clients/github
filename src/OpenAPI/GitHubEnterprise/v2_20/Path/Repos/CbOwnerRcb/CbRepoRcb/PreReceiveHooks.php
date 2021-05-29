<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPreReceiveHooksForRepo;

final class PreReceiveHooks
{
    function get($owner, $repo, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created'): ListPreReceiveHooksForRepo
    {
        return new ListPreReceiveHooksForRepo($owner, $repo, $per_page, $page, $direction, $sort);
    }
}
