<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb;

final class Dismissals
{
    function put($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DismissReview
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DismissReview($owner, $repo, $pull_number, $review_id);
    }
}
