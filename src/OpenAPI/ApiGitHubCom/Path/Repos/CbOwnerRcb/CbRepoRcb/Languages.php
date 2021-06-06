<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Languages
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListLanguages
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListLanguages($owner, $repo);
    }
}
