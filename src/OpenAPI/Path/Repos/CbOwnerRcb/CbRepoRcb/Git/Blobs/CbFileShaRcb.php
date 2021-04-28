<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs;

final class CbFileShaRcb
{
    function get($owner, $repo, $file_sha) : \ApiClients\Client\Github\OpenAPI\Operation\Git\GetBlobOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Git\GetBlobOperation($owner, $repo, $file_sha);
    }
}
