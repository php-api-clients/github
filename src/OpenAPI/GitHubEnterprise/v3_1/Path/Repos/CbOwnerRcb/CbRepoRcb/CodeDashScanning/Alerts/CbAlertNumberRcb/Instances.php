<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb;

final class Instances
{
    function get($owner, $repo, $alert_number, int $page = 1, int $per_page = 30, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\ListAlertInstances
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\ListAlertInstances($owner, $repo, $alert_number, $page, $per_page, $ref);
    }
}
