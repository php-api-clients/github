<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\CreateDiscussionCommentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\ListDiscussionCommentsOperation;

final class Comments
{
    function get($team_id, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1): ListDiscussionCommentsOperation
    {
        return new ListDiscussionCommentsOperation($team_id, $discussion_number, $direction, $per_page, $page);
    }

    function post($team_id, $discussion_number): CreateDiscussionCommentOperation
    {
        return new CreateDiscussionCommentOperation($team_id, $discussion_number);
    }
}
