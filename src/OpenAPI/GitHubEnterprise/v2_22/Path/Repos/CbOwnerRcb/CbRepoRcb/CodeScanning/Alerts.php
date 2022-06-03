<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

final class Alerts
{
    function get($owner, $repo, $tool_name, $tool_guid, int $page = 1, int $per_page = 30, $ref, $state) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\CodeScanning\ListAlertsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\CodeScanning\ListAlertsForRepo($owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $state);
    }
}
