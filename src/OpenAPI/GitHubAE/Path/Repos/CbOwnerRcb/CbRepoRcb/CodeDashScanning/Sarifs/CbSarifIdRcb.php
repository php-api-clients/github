<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs;

final class CbSarifIdRcb
{
    function get($owner, $repo, $sarif_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetSarif
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetSarif($owner, $repo, $sarif_id);
    }
}
