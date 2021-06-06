<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Community;

final class CodeOfConduct
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetForRepo($owner, $repo);
    }
}
