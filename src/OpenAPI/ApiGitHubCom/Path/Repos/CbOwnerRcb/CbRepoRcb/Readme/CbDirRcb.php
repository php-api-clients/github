<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Readme;

final class CbDirRcb
{
    function get($owner, $repo, $dir, $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReadmeInDirectory
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReadmeInDirectory($owner, $repo, $dir, $ref);
    }
}
