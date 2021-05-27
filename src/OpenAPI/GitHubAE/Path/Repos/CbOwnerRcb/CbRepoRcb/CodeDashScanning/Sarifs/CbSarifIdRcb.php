<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs;

final class CbSarifIdRcb
{
    function get($owner, $repo, $sarif_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetSarifOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetSarifOperation($owner, $repo, $sarif_id);
    }
}
