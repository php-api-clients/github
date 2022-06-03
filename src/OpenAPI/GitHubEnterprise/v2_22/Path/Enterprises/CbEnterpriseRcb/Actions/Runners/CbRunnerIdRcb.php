<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

final class CbRunnerIdRcb
{
    function get($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise($enterprise, $runner_id);
    }
    function delete($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise($enterprise, $runner_id);
    }
}
