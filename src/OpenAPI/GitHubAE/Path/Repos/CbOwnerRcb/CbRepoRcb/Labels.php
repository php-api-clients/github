<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\CreateLabelOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListLabelsForRepoOperation;

final class Labels
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListLabelsForRepoOperation
    {
        return new ListLabelsForRepoOperation($owner, $repo, $per_page, $page);
    }

    function post($owner, $repo): CreateLabelOperation
    {
        return new CreateLabelOperation($owner, $repo);
    }
}
