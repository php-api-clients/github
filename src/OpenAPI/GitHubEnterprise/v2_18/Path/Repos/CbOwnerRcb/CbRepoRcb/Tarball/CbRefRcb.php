<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Tarball;

final class CbRefRcb
{
    function get($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\DownloadTarballArchive
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\DownloadTarballArchive($owner, $repo, $ref);
    }
}
