<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb;

final class Dismissals
{
    function put($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\DismissReview
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\DismissReview($owner, $repo, $pull_number, $review_id);
    }
}
