<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

final class RequestedReviewers
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListRequestedReviewersOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListRequestedReviewersOperation($owner, $repo, $pull_number, $per_page, $page);
    }
    function post($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RequestReviewersOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RequestReviewersOperation($owner, $repo, $pull_number);
    }
    function delete($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RemoveRequestedReviewersOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RemoveRequestedReviewersOperation($owner, $repo, $pull_number);
    }
}
