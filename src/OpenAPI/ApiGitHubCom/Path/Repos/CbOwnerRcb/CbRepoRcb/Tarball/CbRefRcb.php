<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Tarball;

final class CbRefRcb
{
    function get($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DownloadTarballArchive
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DownloadTarballArchive($owner, $repo, $ref);
    }
}
