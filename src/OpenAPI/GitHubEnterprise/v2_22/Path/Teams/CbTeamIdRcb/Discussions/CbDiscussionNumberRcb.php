<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Teams\CbTeamIdRcb\Discussions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\DeleteDiscussionLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\GetDiscussionLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\UpdateDiscussionLegacy;

final class CbDiscussionNumberRcb
{
    function get($team_id, $discussion_number): GetDiscussionLegacy
    {
        return new GetDiscussionLegacy($team_id, $discussion_number);
    }

    function delete($team_id, $discussion_number): DeleteDiscussionLegacy
    {
        return new DeleteDiscussionLegacy($team_id, $discussion_number);
    }

    function patch($team_id, $discussion_number): UpdateDiscussionLegacy
    {
        return new UpdateDiscussionLegacy($team_id, $discussion_number);
    }
}
