<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DeleteSelfHostedRunnerFromRepoOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetSelfHostedRunnerForRepoOperation;

final class CbRunnerIdRcb
{
    function get($owner, $repo, $runner_id): GetSelfHostedRunnerForRepoOperation
    {
        return new GetSelfHostedRunnerForRepoOperation($owner, $repo, $runner_id);
    }

    function delete($owner, $repo, $runner_id): DeleteSelfHostedRunnerFromRepoOperation
    {
        return new DeleteSelfHostedRunnerFromRepoOperation($owner, $repo, $runner_id);
    }
}
