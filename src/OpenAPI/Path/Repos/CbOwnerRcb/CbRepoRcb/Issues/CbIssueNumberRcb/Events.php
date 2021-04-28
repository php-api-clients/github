<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Events
{
    function get($owner, $repo, $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\ListEventsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\ListEventsOperation($owner, $repo, $issue_number, $per_page, $page);
    }
}
