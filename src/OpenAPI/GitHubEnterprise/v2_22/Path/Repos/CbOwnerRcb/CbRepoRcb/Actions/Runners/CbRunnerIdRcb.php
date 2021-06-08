<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\DeleteSelfHostedRunnerFromRepo;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\GetSelfHostedRunnerForRepo;

final class CbRunnerIdRcb
{
    function get($owner, $repo, $runner_id): GetSelfHostedRunnerForRepo
    {
        return new GetSelfHostedRunnerForRepo($owner, $repo, $runner_id);
    }

    function delete($owner, $repo, $runner_id): DeleteSelfHostedRunnerFromRepo
    {
        return new DeleteSelfHostedRunnerFromRepo($owner, $repo, $runner_id);
    }
}
