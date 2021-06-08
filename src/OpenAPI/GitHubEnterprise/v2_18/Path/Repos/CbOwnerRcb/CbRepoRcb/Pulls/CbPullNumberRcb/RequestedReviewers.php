<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\ListRequestedReviewers;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\RemoveRequestedReviewers;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\RequestReviewers;

final class RequestedReviewers
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1): ListRequestedReviewers
    {
        return new ListRequestedReviewers($owner, $repo, $pull_number, $per_page, $page);
    }

    function post($owner, $repo, $pull_number): RequestReviewers
    {
        return new RequestReviewers($owner, $repo, $pull_number);
    }

    function delete($owner, $repo, $pull_number): RemoveRequestedReviewers
    {
        return new RemoveRequestedReviewers($owner, $repo, $pull_number);
    }
}
