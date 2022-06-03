<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Comments
{
    function get($owner, $repo, $issue_number, $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListComments
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListComments($owner, $repo, $issue_number, $since, $per_page, $page);
    }
    function post($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\CreateComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\CreateComment($owner, $repo, $issue_number);
    }
}
