<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Timeline
{
    function get($owner, $repo, $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\ListEventsForTimelineOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\ListEventsForTimelineOperation($owner, $repo, $issue_number, $per_page, $page);
    }
}
