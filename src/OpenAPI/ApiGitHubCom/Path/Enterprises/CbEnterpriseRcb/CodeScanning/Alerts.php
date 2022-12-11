<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\CodeScanning;

final class Alerts
{
    function get($enterprise, $tool_name, $tool_guid, $before, $after, int $page = 1, int $per_page = 30, string $direction = 'desc', $state, string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForEnterprise($enterprise, $tool_name, $tool_guid, $before, $after, $page, $per_page, $direction, $state, $sort);
    }
}
