<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Code-Scanning\Alerts\CbAlertNumberRcb;

final class Instances
{
    function get($owner, $repo, $alert_number, int $page = 1, int $per_page = 30, $ref) : \ApiClients\Client\Github\OpenAPI\Operation\CodeScanning\ListAlertsInstancesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\CodeScanning\ListAlertsInstancesOperation($owner, $repo, $alert_number, $page, $per_page, $ref);
    }
}
