<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams\CbTeamIdRcb\Discussions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionLegacy;

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
