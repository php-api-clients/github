<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

final class RequestedReviewers
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\ListRequestedReviewers
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\ListRequestedReviewers($owner, $repo, $pull_number, $per_page, $page);
    }
    function post($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\RequestReviewers
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\RequestReviewers($owner, $repo, $pull_number);
    }
    function delete($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\RemoveRequestedReviewers
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\RemoveRequestedReviewers($owner, $repo, $pull_number);
    }
}
