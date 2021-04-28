<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Import;

final class LargeFiles
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\GetLargeFilesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\GetLargeFilesOperation($owner, $repo);
    }
}
