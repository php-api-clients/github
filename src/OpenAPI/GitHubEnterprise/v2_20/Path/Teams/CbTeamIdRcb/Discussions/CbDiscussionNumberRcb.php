<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb\Discussions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\DeleteDiscussionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\GetDiscussionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\UpdateDiscussionOperation;

final class CbDiscussionNumberRcb
{
    function get($team_id, $discussion_number): GetDiscussionOperation
    {
        return new GetDiscussionOperation($team_id, $discussion_number);
    }

    function delete($team_id, $discussion_number): DeleteDiscussionOperation
    {
        return new DeleteDiscussionOperation($team_id, $discussion_number);
    }

    function patch($team_id, $discussion_number): UpdateDiscussionOperation
    {
        return new UpdateDiscussionOperation($team_id, $discussion_number);
    }
}
