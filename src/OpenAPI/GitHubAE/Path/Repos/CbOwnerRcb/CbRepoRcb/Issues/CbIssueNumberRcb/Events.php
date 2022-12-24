<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Events
{
    function get($owner, $repo, $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListEvents
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListEvents($owner, $repo, $issue_number, $per_page, $page);
    }
}