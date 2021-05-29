<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CreateLabel;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListLabelsForRepo;

final class Labels
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListLabelsForRepo
    {
        return new ListLabelsForRepo($owner, $repo, $per_page, $page);
    }

    function post($owner, $repo): CreateLabel
    {
        return new CreateLabel($owner, $repo);
    }
}