<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Commits
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Git\CreateCommitOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Git\CreateCommitOperation($owner, $repo);
    }
}
