<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAuditLogOperation;

final class AuditLog
{
    function get($enterprise, $phrase, $include, $after, $before, $order, int $page = 1, int $per_page = 30): GetAuditLogOperation
    {
        return new GetAuditLogOperation($enterprise, $phrase, $include, $after, $before, $order, $page, $per_page);
    }
}
