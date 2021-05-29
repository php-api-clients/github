<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerFromRepo;

final class CbRunnerIdRcb
{
    function delete($owner, $repo, $runner_id): DeleteSelfHostedRunnerFromRepo
    {
        return new DeleteSelfHostedRunnerFromRepo($owner, $repo, $runner_id);
    }
}
