<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

final class CbRunnerIdRcb
{
    function get($owner, $repo, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetSelfHostedRunnerForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetSelfHostedRunnerForRepo($owner, $repo, $runner_id);
    }
    function delete($owner, $repo, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DeleteSelfHostedRunnerFromRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DeleteSelfHostedRunnerFromRepo($owner, $repo, $runner_id);
    }
}
