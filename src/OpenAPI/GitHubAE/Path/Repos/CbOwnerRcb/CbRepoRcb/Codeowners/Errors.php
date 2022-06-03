<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Codeowners;

final class Errors
{
    function get($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CodeownersErrors
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CodeownersErrors($owner, $repo, $ref);
    }
}
