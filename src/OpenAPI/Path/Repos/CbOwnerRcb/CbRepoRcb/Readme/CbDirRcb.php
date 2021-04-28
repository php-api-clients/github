<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Readme;

final class CbDirRcb
{
    function get($owner, $repo, $dir, $ref) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetReadmeInDirectoryOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetReadmeInDirectoryOperation($owner, $repo, $dir, $ref);
    }
}
