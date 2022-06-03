<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

final class Reviews
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListReviews
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListReviews($owner, $repo, $pull_number, $per_page, $page);
    }
    function post($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\CreateReview
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\CreateReview($owner, $repo, $pull_number);
    }
}
