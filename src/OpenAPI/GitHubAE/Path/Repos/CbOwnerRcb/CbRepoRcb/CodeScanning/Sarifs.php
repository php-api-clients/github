<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

final class Sarifs
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\UploadSarif
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\UploadSarif($owner, $repo);
    }
}
