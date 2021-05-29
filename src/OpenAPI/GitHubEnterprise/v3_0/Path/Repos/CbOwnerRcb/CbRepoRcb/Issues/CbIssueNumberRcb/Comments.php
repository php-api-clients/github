<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\CreateCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\ListCommentsOperation;

final class Comments
{
    function get($owner, $repo, $issue_number, $since, int $per_page = 30, int $page = 1): ListCommentsOperation
    {
        return new ListCommentsOperation($owner, $repo, $issue_number, $since, $per_page, $page);
    }

    function post($owner, $repo, $issue_number): CreateCommentOperation
    {
        return new CreateCommentOperation($owner, $repo, $issue_number);
    }
}
