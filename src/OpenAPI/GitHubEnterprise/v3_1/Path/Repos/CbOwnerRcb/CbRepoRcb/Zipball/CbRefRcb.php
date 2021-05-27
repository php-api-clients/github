<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\Zipball;

final class CbRefRcb
{
    function get($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DownloadZipballArchiveOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DownloadZipballArchiveOperation($owner, $repo, $ref);
    }
}
