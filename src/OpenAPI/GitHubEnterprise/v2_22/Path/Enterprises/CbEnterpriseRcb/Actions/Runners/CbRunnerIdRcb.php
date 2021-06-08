<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise;

final class CbRunnerIdRcb
{
    function get($enterprise, $runner_id): GetSelfHostedRunnerForEnterprise
    {
        return new GetSelfHostedRunnerForEnterprise($enterprise, $runner_id);
    }

    function delete($enterprise, $runner_id): DeleteSelfHostedRunnerFromEnterprise
    {
        return new DeleteSelfHostedRunnerFromEnterprise($enterprise, $runner_id);
    }
}
