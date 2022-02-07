<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb;

final class Labels
{
    function get($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise($enterprise, $runner_id);
    }
    function put($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise($enterprise, $runner_id);
    }
    function post($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise($enterprise, $runner_id);
    }
    function delete($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise($enterprise, $runner_id);
    }
}
