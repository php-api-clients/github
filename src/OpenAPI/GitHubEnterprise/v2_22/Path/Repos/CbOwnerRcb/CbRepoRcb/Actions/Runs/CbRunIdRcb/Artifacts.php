<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\ListWorkflowRunArtifactsOperation;

final class Artifacts
{
    function get($owner, $repo, $run_id, int $per_page = 30, int $page = 1): ListWorkflowRunArtifactsOperation
    {
        return new ListWorkflowRunArtifactsOperation($owner, $repo, $run_id, $per_page, $page);
    }
}
