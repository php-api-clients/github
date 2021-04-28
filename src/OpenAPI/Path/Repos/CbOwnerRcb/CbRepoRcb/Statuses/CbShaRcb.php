<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Statuses;

final class CbShaRcb
{
    function post($owner, $repo, $sha) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateCommitStatusOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateCommitStatusOperation($owner, $repo, $sha);
    }
}
