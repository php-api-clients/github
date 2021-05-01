<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

final class Commits
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Pulls\ListCommitsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Pulls\ListCommitsOperation($owner, $repo, $pull_number, $per_page, $page);
    }
}
