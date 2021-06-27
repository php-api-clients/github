<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb;

final class Reactions
{
    function get($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForIssueComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForIssueComment($owner, $repo, $comment_id, $content, $per_page, $page);
    }
    function post($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForIssueComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForIssueComment($owner, $repo, $comment_id);
    }
}
