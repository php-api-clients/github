<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Import;

final class Lfs
{
    function patch($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\SetLfsPreferenceOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\SetLfsPreferenceOperation($owner, $repo);
    }
}
