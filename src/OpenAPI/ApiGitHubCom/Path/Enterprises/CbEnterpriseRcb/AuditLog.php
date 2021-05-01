<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Enterprises\CbEnterpriseRcb;

final class AuditLog
{
    function get($enterprise, $phrase, $include, $after, $before, $order, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\AuditLog\GetAuditLogOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\AuditLog\GetAuditLogOperation($enterprise, $phrase, $include, $after, $before, $order, $page, $per_page);
    }
}
