<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb;

final class Comments
{
    function get($owner, $repo, $issue_number, $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\ListCommentsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\ListCommentsOperation($owner, $repo, $issue_number, $since, $per_page, $page);
    }
    function post($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\CreateCommentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\CreateCommentOperation($owner, $repo, $issue_number);
    }
}
