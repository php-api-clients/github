<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\CreateForIssue;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Reactions\ListForIssue;

final class Reactions
{
    function get($owner, $repo, $issue_number, $content, int $per_page = 30, int $page = 1): ListForIssue
    {
        return new ListForIssue($owner, $repo, $issue_number, $content, $per_page, $page);
    }

    function post($owner, $repo, $issue_number): CreateForIssue
    {
        return new CreateForIssue($owner, $repo, $issue_number);
    }
}
