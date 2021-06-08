<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionCommentInOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionCommentsInOrg;

final class Comments
{
    function get($org, $team_slug, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1): ListDiscussionCommentsInOrg
    {
        return new ListDiscussionCommentsInOrg($org, $team_slug, $discussion_number, $direction, $per_page, $page);
    }

    function post($org, $team_slug, $discussion_number): CreateDiscussionCommentInOrg
    {
        return new CreateDiscussionCommentInOrg($org, $team_slug, $discussion_number);
    }
}
