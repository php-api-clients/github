<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

final class Files
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListFiles
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListFiles($owner, $repo, $pull_number, $per_page, $page);
    }
}
