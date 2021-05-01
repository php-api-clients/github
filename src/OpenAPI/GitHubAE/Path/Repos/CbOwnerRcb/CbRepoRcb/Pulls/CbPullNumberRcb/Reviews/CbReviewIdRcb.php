<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews;

final class CbReviewIdRcb
{
    function get($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\GetReviewOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\GetReviewOperation($owner, $repo, $pull_number, $review_id);
    }
    function put($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\UpdateReviewOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\UpdateReviewOperation($owner, $repo, $pull_number, $review_id);
    }
    function delete($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\DeletePendingReviewOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\DeletePendingReviewOperation($owner, $repo, $pull_number, $review_id);
    }
}