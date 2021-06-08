<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\DeleteSelfHostedRunnerFromOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\GetSelfHostedRunnerForOrg;

final class CbRunnerIdRcb
{
    function get($org, $runner_id): GetSelfHostedRunnerForOrg
    {
        return new GetSelfHostedRunnerForOrg($org, $runner_id);
    }

    function delete($org, $runner_id): DeleteSelfHostedRunnerFromOrg
    {
        return new DeleteSelfHostedRunnerFromOrg($org, $runner_id);
    }
}
