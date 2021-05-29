<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues\ListEventsOperation;

final class Events
{
    function get($owner, $repo, $issue_number, int $per_page = 30, int $page = 1): ListEventsOperation
    {
        return new ListEventsOperation($owner, $repo, $issue_number, $per_page, $page);
    }
}
