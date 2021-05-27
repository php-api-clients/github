<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning;

final class Alerts
{
    function get($owner, $repo, $state, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\ListAlertsForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\ListAlertsForRepoOperation($owner, $repo, $state, $page, $per_page);
    }
}
