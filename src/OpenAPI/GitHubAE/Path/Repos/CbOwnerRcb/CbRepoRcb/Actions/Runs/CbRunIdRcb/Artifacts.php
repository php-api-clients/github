<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class Artifacts
{
    function get($owner, $repo, $run_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRunArtifacts
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRunArtifacts($owner, $repo, $run_id, $per_page, $page);
    }
}
