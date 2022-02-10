<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb;

final class Labels
{
    function get($org, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg($org, $runner_id);
    }
    function put($org, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForOrg($org, $runner_id);
    }
    function post($org, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForOrg($org, $runner_id);
    }
    function delete($org, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg($org, $runner_id);
    }
}
