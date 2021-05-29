<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterpriseOperation;

final class CbRunnerIdRcb
{
    function get($enterprise, $runner_id): GetSelfHostedRunnerForEnterpriseOperation
    {
        return new GetSelfHostedRunnerForEnterpriseOperation($enterprise, $runner_id);
    }

    function delete($enterprise, $runner_id): DeleteSelfHostedRunnerFromEnterpriseOperation
    {
        return new DeleteSelfHostedRunnerFromEnterpriseOperation($enterprise, $runner_id);
    }
}
