<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb\Discussions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionLegacyOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionLegacyOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionLegacyOperation;

final class CbDiscussionNumberRcb
{
    function get($team_id, $discussion_number): GetDiscussionLegacyOperation
    {
        return new GetDiscussionLegacyOperation($team_id, $discussion_number);
    }

    function delete($team_id, $discussion_number): DeleteDiscussionLegacyOperation
    {
        return new DeleteDiscussionLegacyOperation($team_id, $discussion_number);
    }

    function patch($team_id, $discussion_number): UpdateDiscussionLegacyOperation
    {
        return new UpdateDiscussionLegacyOperation($team_id, $discussion_number);
    }
}
