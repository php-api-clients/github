<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListWorkflowRunArtifacts;

final class Artifacts
{
    function get($owner, $repo, $run_id, int $per_page = 30, int $page = 1): ListWorkflowRunArtifacts
    {
        return new ListWorkflowRunArtifacts($owner, $repo, $run_id, $per_page, $page);
    }
}