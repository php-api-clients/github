<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Import;

final class Authors
{
    function get($owner, $repo, $since) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\GetCommitAuthorsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\GetCommitAuthorsOperation($owner, $repo, $since);
    }
}
