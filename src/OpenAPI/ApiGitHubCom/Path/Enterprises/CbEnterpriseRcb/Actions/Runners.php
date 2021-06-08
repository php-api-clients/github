<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise;

final class Runners
{
    function get($enterprise, int $per_page = 30, int $page = 1): ListSelfHostedRunnersForEnterprise
    {
        return new ListSelfHostedRunnersForEnterprise($enterprise, $per_page, $page);
    }
}
