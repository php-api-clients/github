<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnersForRepoOperation;

final class Runners
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListSelfHostedRunnersForRepoOperation
    {
        return new ListSelfHostedRunnersForRepoOperation($owner, $repo, $per_page, $page);
    }
}
