<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Check-Runs;

final class CbCheckRunIdRcb
{
    function get($owner, $repo, $check_run_id) : \ApiClients\Client\Github\OpenAPI\Operation\Checks\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Checks\GetOperation($owner, $repo, $check_run_id);
    }
    function patch($owner, $repo, $check_run_id) : \ApiClients\Client\Github\OpenAPI\Operation\Checks\UpdateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Checks\UpdateOperation($owner, $repo, $check_run_id);
    }
}
