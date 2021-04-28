<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions;

final class RunnerGroups
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListSelfHostedRunnerGroupsForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListSelfHostedRunnerGroupsForOrgOperation($org, $per_page, $page);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateSelfHostedRunnerGroupForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateSelfHostedRunnerGroupForOrgOperation($org);
    }
}
