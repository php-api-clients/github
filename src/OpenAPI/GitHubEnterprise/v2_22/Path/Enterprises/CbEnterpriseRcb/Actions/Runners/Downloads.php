<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterpriseOperation;

final class Downloads
{
    function get($enterprise): ListRunnerApplicationsForEnterpriseOperation
    {
        return new ListRunnerApplicationsForEnterpriseOperation($enterprise);
    }
}
