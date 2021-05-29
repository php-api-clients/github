<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListRequestedReviewersOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RemoveRequestedReviewersOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RequestReviewersOperation;

final class RequestedReviewers
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1): ListRequestedReviewersOperation
    {
        return new ListRequestedReviewersOperation($owner, $repo, $pull_number, $per_page, $page);
    }

    function post($owner, $repo, $pull_number): RequestReviewersOperation
    {
        return new RequestReviewersOperation($owner, $repo, $pull_number);
    }

    function delete($owner, $repo, $pull_number): RemoveRequestedReviewersOperation
    {
        return new RemoveRequestedReviewersOperation($owner, $repo, $pull_number);
    }
}
