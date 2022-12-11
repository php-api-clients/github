<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

final class Alerts
{
    function get($owner, $repo, $tool_name, $tool_guid, int $page = 1, int $per_page = 30, $ref, string $direction = 'desc', string $sort = 'created', $state, $severity) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertsForRepo($owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $direction, $sort, $state, $severity);
    }
}
