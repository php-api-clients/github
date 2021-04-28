<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Enterprises\CbEnterpriseRcb\Actions\Runners;

final class CbRunnerIdRcb
{
    function get($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterpriseOperation($enterprise, $runner_id);
    }
    function delete($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterpriseOperation($enterprise, $runner_id);
    }
}
