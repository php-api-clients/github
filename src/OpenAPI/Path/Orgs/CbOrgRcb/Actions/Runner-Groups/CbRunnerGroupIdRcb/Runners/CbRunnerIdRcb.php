<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions\Runner-Groups\CbRunnerGroupIdRcb\Runners;

final class CbRunnerIdRcb
{
    function put($org, $runner_group_id, $runner_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\AddSelfHostedRunnerToGroupForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\AddSelfHostedRunnerToGroupForOrgOperation($org, $runner_group_id, $runner_id);
    }
    function delete($org, $runner_group_id, $runner_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrgOperation($org, $runner_group_id, $runner_id);
    }
}
