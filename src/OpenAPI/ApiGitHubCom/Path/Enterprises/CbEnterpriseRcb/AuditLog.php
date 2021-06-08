<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAuditLog;

final class AuditLog
{
    function get($enterprise, $phrase, $include, $after, $before, $order, int $page = 1, int $per_page = 30): GetAuditLog
    {
        return new GetAuditLog($enterprise, $phrase, $include, $after, $before, $order, $page, $per_page);
    }
}
