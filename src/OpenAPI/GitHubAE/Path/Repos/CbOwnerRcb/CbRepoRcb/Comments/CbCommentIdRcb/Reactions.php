<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb;

final class Reactions
{
    function get($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForCommitComment($owner, $repo, $comment_id, $content, $per_page, $page);
    }
    function post($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForCommitComment($owner, $repo, $comment_id);
    }
}
