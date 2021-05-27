<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class Artifacts
{
    function get($owner, $repo, $run_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListWorkflowRunArtifactsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListWorkflowRunArtifactsOperation($owner, $repo, $run_id, $per_page, $page);
    }
}
