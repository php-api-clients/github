<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb;

final class Comments
{
    function get(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListDiscussionComments
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListDiscussionComments($accept, $team_id, $discussion_number, $direction, $per_page, $page);
    }
    function post(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CreateDiscussionComment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CreateDiscussionComment($accept, $team_id, $discussion_number);
    }
}
