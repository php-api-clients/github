<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Import\Authors;

final class CbAuthorIdRcb
{
    function patch($owner, $repo, $author_id) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\MapCommitAuthorOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\MapCommitAuthorOperation($owner, $repo, $author_id);
    }
}
