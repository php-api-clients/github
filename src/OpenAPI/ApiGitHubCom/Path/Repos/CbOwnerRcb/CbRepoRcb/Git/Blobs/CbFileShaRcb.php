<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs;

final class CbFileShaRcb
{
    function get($owner, $repo, $file_sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetBlob
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetBlob($owner, $repo, $file_sha);
    }
}
