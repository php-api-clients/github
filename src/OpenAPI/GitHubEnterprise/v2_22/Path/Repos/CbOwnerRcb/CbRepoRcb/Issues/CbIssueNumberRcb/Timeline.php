<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListEventsForTimelineOperation;

final class Timeline
{
    function get($owner, $repo, $issue_number, int $per_page = 30, int $page = 1): ListEventsForTimelineOperation
    {
        return new ListEventsForTimelineOperation($owner, $repo, $issue_number, $per_page, $page);
    }
}
