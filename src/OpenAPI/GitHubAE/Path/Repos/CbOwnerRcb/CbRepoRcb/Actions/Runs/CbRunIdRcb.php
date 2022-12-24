<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs;

final class CbRunIdRcb
{
    function get($owner, $repo, $run_id, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRun($owner, $repo, $run_id, $exclude_pull_requests);
    }
    function delete($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteWorkflowRun($owner, $repo, $run_id);
    }
}