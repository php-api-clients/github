<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb;

final class AuditLog
{
    function get($org, $phrase, $after, $before, $order, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetAuditLog
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetAuditLog($org, $phrase, $after, $before, $order, $per_page, $page);
    }
}
