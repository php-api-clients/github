<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\ListEvents;

final class Events
{
    function get($owner, $repo, $issue_number, int $per_page = 30, int $page = 1): ListEvents
    {
        return new ListEvents($owner, $repo, $issue_number, $per_page, $page);
    }
}
