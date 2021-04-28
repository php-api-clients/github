<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class Approvals
{
    function get($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetReviewsForRunOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetReviewsForRunOperation($owner, $repo, $run_id);
    }
}
