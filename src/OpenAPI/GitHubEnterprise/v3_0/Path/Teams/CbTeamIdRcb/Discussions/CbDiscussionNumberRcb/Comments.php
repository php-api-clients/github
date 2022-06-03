<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb;

final class Comments
{
    function get($team_id, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionCommentsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionCommentsLegacy($team_id, $discussion_number, $direction, $per_page, $page);
    }
    function post($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionCommentLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionCommentLegacy($team_id, $discussion_number);
    }
}
