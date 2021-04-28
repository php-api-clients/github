<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning;

final class Alerts
{
    function get($owner, $repo, $state, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\Operation\SecretScanning\ListAlertsForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\SecretScanning\ListAlertsForRepoOperation($owner, $repo, $state, $page, $per_page);
    }
}
