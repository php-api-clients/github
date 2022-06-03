<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs;

final class CbFileShaRcb
{
    function get($owner, $repo, $file_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetBlob
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetBlob($owner, $repo, $file_sha);
    }
}
