<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Import;

final class Lfs
{
    function patch($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\SetLfsPreferenceOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\SetLfsPreferenceOperation($owner, $repo);
    }
}
