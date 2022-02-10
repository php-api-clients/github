<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb;

final class Labels
{
    function get($owner, $repo, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForRepo($owner, $repo, $runner_id);
    }
    function put($owner, $repo, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForRepo($owner, $repo, $runner_id);
    }
    function post($owner, $repo, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForRepo($owner, $repo, $runner_id);
    }
    function delete($owner, $repo, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo($owner, $repo, $runner_id);
    }
}
