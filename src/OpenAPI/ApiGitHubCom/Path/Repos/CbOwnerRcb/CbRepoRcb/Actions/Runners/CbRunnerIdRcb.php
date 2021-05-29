<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromRepoOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForRepoOperation;

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
