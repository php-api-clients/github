<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterpriseOperation;

final class Runners
{
    function get($enterprise, $runner_group_id, int $per_page = 30, int $page = 1): ListSelfHostedRunnersInGroupForEnterpriseOperation
    {
        return new ListSelfHostedRunnersInGroupForEnterpriseOperation($enterprise, $runner_group_id, $per_page, $page);
    }

    function put($enterprise, $runner_group_id): SetSelfHostedRunnersInGroupForEnterpriseOperation
    {
        return new SetSelfHostedRunnersInGroupForEnterpriseOperation($enterprise, $runner_group_id);
    }
}
