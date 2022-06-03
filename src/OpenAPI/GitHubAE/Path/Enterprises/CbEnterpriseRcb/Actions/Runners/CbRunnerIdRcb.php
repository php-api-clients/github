<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

final class CbRunnerIdRcb
{
    function get($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise($enterprise, $runner_id);
    }
    function delete($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise($enterprise, $runner_id);
    }
}
