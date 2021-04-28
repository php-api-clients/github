<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb;

final class AuditLog
{
    function get($org, $phrase, $include, $after, $before, $order, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\GetAuditLogOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\GetAuditLogOperation($org, $phrase, $include, $after, $before, $order, $per_page, $page);
    }
}
