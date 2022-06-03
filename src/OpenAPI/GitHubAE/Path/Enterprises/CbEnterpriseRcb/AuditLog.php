<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb;

final class AuditLog
{
    function get($enterprise, $phrase, $after, $before, $order, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAuditLog
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAuditLog($enterprise, $phrase, $after, $before, $order, $page, $per_page);
    }
}
