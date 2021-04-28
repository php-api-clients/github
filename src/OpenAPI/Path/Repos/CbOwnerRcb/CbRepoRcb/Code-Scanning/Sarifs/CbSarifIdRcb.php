<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Code-Scanning\Sarifs;

final class CbSarifIdRcb
{
    function get($owner, $repo, $sarif_id) : \ApiClients\Client\Github\OpenAPI\Operation\CodeScanning\GetSarifOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\CodeScanning\GetSarifOperation($owner, $repo, $sarif_id);
    }
}
