<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews;

final class CbReviewIdRcb
{
    function get($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Pulls\GetReview
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Pulls\GetReview($owner, $repo, $pull_number, $review_id);
    }
    function put($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Pulls\UpdateReview
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Pulls\UpdateReview($owner, $repo, $pull_number, $review_id);
    }
    function delete($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Pulls\DeletePendingReview
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Pulls\DeletePendingReview($owner, $repo, $pull_number, $review_id);
    }
}
