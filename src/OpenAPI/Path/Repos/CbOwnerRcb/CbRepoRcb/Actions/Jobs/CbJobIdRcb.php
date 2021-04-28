<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs;

final class CbJobIdRcb
{
    function get($owner, $repo, $job_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetJobForWorkflowRunOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetJobForWorkflowRunOperation($owner, $repo, $job_id);
    }
}
