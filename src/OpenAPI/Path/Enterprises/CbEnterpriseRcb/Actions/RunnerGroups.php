<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Enterprises\CbEnterpriseRcb\Actions;

final class RunnerGroups
{
    function get($enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterpriseOperation($enterprise, $per_page, $page);
    }
    function post($enterprise) : \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterpriseOperation($enterprise);
    }
}
