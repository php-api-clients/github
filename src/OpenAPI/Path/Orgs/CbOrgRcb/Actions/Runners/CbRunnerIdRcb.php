<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions\Runners;

final class CbRunnerIdRcb
{
    function get($org, $runner_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetSelfHostedRunnerForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetSelfHostedRunnerForOrgOperation($org, $runner_id);
    }
    function delete($org, $runner_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\DeleteSelfHostedRunnerFromOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\DeleteSelfHostedRunnerFromOrgOperation($org, $runner_id);
    }
}
