<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions\Runner-Groups\CbRunnerGroupIdRcb;

final class Runners
{
    function get($org, $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListSelfHostedRunnersInGroupForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListSelfHostedRunnersInGroupForOrgOperation($org, $runner_group_id, $per_page, $page);
    }
    function put($org, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\SetSelfHostedRunnersInGroupForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\SetSelfHostedRunnersInGroupForOrgOperation($org, $runner_group_id);
    }
}
