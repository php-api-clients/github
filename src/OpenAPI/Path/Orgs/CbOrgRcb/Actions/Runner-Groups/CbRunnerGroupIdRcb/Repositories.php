<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions\Runner-Groups\CbRunnerGroupIdRcb;

final class Repositories
{
    function get($org, $runner_group_id, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrgOperation($org, $runner_group_id, $page, $per_page);
    }
    function put($org, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrgOperation($org, $runner_group_id);
    }
}
