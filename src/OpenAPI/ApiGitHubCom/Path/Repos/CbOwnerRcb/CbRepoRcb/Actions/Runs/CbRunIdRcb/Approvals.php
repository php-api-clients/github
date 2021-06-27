<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class Approvals
{
    function get($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetReviewsForRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetReviewsForRun($owner, $repo, $run_id);
    }
}
