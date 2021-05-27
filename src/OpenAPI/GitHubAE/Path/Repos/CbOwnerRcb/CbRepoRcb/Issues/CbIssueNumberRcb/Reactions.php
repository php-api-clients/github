<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Reactions
{
    function get($owner, $repo, $issue_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForIssueOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForIssueOperation($owner, $repo, $issue_number, $content, $per_page, $page);
    }
    function post($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForIssueOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForIssueOperation($owner, $repo, $issue_number);
    }
}
