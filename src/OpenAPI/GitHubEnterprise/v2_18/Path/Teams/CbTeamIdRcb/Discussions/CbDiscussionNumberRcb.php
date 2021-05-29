<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb\Discussions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\DeleteDiscussionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetDiscussionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\UpdateDiscussionOperation;

final class CbDiscussionNumberRcb
{
    function get(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number): GetDiscussionOperation
    {
        return new GetDiscussionOperation($accept, $team_id, $discussion_number);
    }

    function delete(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number): DeleteDiscussionOperation
    {
        return new DeleteDiscussionOperation($accept, $team_id, $discussion_number);
    }

    function patch(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number): UpdateDiscussionOperation
    {
        return new UpdateDiscussionOperation($accept, $team_id, $discussion_number);
    }
}
