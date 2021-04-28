<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Blobs
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Git\CreateBlobOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Git\CreateBlobOperation($owner, $repo);
    }
}
