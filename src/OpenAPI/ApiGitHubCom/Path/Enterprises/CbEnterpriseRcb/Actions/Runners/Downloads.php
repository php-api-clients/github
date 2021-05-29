<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise;

final class Downloads
{
    function get($enterprise): ListRunnerApplicationsForEnterprise
    {
        return new ListRunnerApplicationsForEnterprise($enterprise);
    }
}
