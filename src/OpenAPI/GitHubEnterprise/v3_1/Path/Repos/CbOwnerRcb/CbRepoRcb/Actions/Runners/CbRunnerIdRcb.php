<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

final class CbRunnerIdRcb
{
    function get($owner, $repo, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerForRepoOperation($owner, $repo, $runner_id);
    }
    function delete($owner, $repo, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerFromRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerFromRepoOperation($owner, $repo, $runner_id);
    }
}
