<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb\Discussions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\DeleteDiscussion;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\GetDiscussion;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\UpdateDiscussion;

final class CbDiscussionNumberRcb
{
    function get($team_id, $discussion_number): GetDiscussion
    {
        return new GetDiscussion($team_id, $discussion_number);
    }

    function delete($team_id, $discussion_number): DeleteDiscussion
    {
        return new DeleteDiscussion($team_id, $discussion_number);
    }

    function patch($team_id, $discussion_number): UpdateDiscussion
    {
        return new UpdateDiscussion($team_id, $discussion_number);
    }
}
