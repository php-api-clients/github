<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb;

final class Comments
{
    function get($org, $team_slug, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionCommentsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionCommentsInOrg($org, $team_slug, $discussion_number, $direction, $per_page, $page);
    }
    function post($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionCommentInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionCommentInOrg($org, $team_slug, $discussion_number);
    }
}