<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForIssueOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForIssueOperation;

final class Reactions
{
    function get($owner, $repo, $issue_number, $content, int $per_page = 30, int $page = 1): ListForIssueOperation
    {
        return new ListForIssueOperation($owner, $repo, $issue_number, $content, $per_page, $page);
    }

    function post($owner, $repo, $issue_number): CreateForIssueOperation
    {
        return new CreateForIssueOperation($owner, $repo, $issue_number);
    }
}
