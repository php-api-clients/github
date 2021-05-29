<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterpriseOperation;

final class RunnerGroups
{
    function get($enterprise, int $per_page = 30, int $page = 1): ListSelfHostedRunnerGroupsForEnterpriseOperation
    {
        return new ListSelfHostedRunnerGroupsForEnterpriseOperation($enterprise, $per_page, $page);
    }

    function post($enterprise): CreateSelfHostedRunnerGroupForEnterpriseOperation
    {
        return new CreateSelfHostedRunnerGroupForEnterpriseOperation($enterprise);
    }
}
