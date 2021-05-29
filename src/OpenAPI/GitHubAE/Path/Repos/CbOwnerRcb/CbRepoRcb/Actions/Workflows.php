<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRepoWorkflowsOperation;

final class Workflows
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListRepoWorkflowsOperation
    {
        return new ListRepoWorkflowsOperation($owner, $repo, $per_page, $page);
    }
}
