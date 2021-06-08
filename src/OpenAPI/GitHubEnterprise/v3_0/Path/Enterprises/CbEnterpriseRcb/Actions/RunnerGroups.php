<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprises\CbEnterpriseRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise;

final class RunnerGroups
{
    function get($enterprise, int $per_page = 30, int $page = 1): ListSelfHostedRunnerGroupsForEnterprise
    {
        return new ListSelfHostedRunnerGroupsForEnterprise($enterprise, $per_page, $page);
    }

    function post($enterprise): CreateSelfHostedRunnerGroupForEnterprise
    {
        return new CreateSelfHostedRunnerGroupForEnterprise($enterprise);
    }
}
