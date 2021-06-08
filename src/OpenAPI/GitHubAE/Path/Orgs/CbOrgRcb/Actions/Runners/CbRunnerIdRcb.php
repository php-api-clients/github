<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerFromOrg;

final class CbRunnerIdRcb
{
    function delete($org, $runner_id): DeleteSelfHostedRunnerFromOrg
    {
        return new DeleteSelfHostedRunnerFromOrg($org, $runner_id);
    }
}
