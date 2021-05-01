<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Path\\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

final class Alerts
{
    function get($owner, $repo, $tool_name, $tool_guid, int $page = 1, int $per_page = 30, $ref, $state) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\CodeScanning\ListAlertsForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\CodeScanning\ListAlertsForRepoOperation($owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $state);
    }
}
