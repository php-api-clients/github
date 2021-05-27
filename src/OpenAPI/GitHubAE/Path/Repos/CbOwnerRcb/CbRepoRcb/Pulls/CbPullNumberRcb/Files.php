<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

final class Files
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListFilesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListFilesOperation($owner, $repo, $pull_number, $per_page, $page);
    }
}
