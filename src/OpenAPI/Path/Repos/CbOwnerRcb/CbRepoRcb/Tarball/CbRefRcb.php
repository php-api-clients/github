<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Tarball;

final class CbRefRcb
{
    function get($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\DownloadTarballArchiveOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\DownloadTarballArchiveOperation($owner, $repo, $ref);
    }
}
