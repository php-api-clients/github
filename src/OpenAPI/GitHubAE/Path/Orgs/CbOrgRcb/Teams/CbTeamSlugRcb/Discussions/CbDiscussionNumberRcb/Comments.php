<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionCommentInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionCommentsInOrgOperation;

final class Comments
{
    function get($org, $team_slug, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1): ListDiscussionCommentsInOrgOperation
    {
        return new ListDiscussionCommentsInOrgOperation($org, $team_slug, $discussion_number, $direction, $per_page, $page);
    }

    function post($org, $team_slug, $discussion_number): CreateDiscussionCommentInOrgOperation
    {
        return new CreateDiscussionCommentInOrgOperation($org, $team_slug, $discussion_number);
    }
}
