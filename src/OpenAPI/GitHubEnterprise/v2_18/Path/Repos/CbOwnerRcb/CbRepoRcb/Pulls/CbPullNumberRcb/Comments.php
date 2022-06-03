<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

final class Comments
{
    function get($owner, $repo, $pull_number, string $sort = 'created', $direction, $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\ListReviewComments
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\ListReviewComments($owner, $repo, $pull_number, $sort, $direction, $since, $per_page, $page);
    }
    function post($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\CreateReviewCommentAlternative
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\CreateReviewCommentAlternative($owner, $repo, $pull_number);
    }
}
