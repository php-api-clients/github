<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb;

final class Comments
{
    function get($team_id, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\ListDiscussionComments
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\ListDiscussionComments($team_id, $discussion_number, $direction, $per_page, $page);
    }
    function post($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\CreateDiscussionComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\CreateDiscussionComment($team_id, $discussion_number);
    }
}
