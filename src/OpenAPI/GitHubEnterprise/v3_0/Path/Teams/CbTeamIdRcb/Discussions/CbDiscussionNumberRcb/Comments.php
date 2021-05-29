<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionCommentLegacyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionCommentsLegacyOperation;

final class Comments
{
    function get($team_id, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1): ListDiscussionCommentsLegacyOperation
    {
        return new ListDiscussionCommentsLegacyOperation($team_id, $discussion_number, $direction, $per_page, $page);
    }

    function post($team_id, $discussion_number): CreateDiscussionCommentLegacyOperation
    {
        return new CreateDiscussionCommentLegacyOperation($team_id, $discussion_number);
    }
}
