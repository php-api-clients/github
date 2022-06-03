<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs;

final class CbFileShaRcb
{
    function get($owner, $repo, $file_sha) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetBlob
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetBlob($owner, $repo, $file_sha);
    }
}
