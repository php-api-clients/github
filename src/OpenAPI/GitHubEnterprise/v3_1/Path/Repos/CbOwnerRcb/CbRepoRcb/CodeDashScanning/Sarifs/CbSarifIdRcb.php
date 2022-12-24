<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs;

final class CbSarifIdRcb
{
    function get($owner, $repo, $sarif_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetSarif
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetSarif($owner, $repo, $sarif_id);
    }
}