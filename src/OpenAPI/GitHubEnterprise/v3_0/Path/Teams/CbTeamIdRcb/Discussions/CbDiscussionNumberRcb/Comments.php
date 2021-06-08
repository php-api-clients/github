<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionCommentLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionCommentsLegacy;

final class Comments
{
    function get($team_id, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1): ListDiscussionCommentsLegacy
    {
        return new ListDiscussionCommentsLegacy($team_id, $discussion_number, $direction, $per_page, $page);
    }

    function post($team_id, $discussion_number): CreateDiscussionCommentLegacy
    {
        return new CreateDiscussionCommentLegacy($team_id, $discussion_number);
    }
}
