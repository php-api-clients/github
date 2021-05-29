<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\GetAuditLogOperation;

final class AuditLog
{
    function get($org, $phrase, $include, $after, $before, $order, int $per_page = 30, int $page = 1): GetAuditLogOperation
    {
        return new GetAuditLogOperation($org, $phrase, $include, $after, $before, $order, $per_page, $page);
    }
}
