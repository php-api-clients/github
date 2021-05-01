<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs;

final class CbFileShaRcb
{
    function get($owner, $repo, $file_sha) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetBlobOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetBlobOperation($owner, $repo, $file_sha);
    }
}