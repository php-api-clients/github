<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListEventsForTimeline;

final class Timeline
{
    function get($owner, $repo, $issue_number, int $per_page = 30, int $page = 1): ListEventsForTimeline
    {
        return new ListEventsForTimeline($owner, $repo, $issue_number, $per_page, $page);
    }
}
