<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprises\CbEnterpriseRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterpriseOperation;

final class Runners
{
    function get($enterprise, int $per_page = 30, int $page = 1): ListSelfHostedRunnersForEnterpriseOperation
    {
        return new ListSelfHostedRunnersForEnterpriseOperation($enterprise, $per_page, $page);
    }
}
