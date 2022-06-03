<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb;

final class Events
{
    function post($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Pulls\SubmitReview
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Pulls\SubmitReview($owner, $repo, $pull_number, $review_id);
    }
}
