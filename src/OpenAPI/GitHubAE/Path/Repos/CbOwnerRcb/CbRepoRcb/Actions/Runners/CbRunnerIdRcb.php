<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerFromRepoOperation;

final class CbRunnerIdRcb
{
    function delete($owner, $repo, $runner_id): DeleteSelfHostedRunnerFromRepoOperation
    {
        return new DeleteSelfHostedRunnerFromRepoOperation($owner, $repo, $runner_id);
    }
}
