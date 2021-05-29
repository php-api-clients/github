<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForOrgOperation;

final class CbRunnerIdRcb
{
    function get($org, $runner_id): GetSelfHostedRunnerForOrgOperation
    {
        return new GetSelfHostedRunnerForOrgOperation($org, $runner_id);
    }

    function delete($org, $runner_id): DeleteSelfHostedRunnerFromOrgOperation
    {
        return new DeleteSelfHostedRunnerFromOrgOperation($org, $runner_id);
    }
}
