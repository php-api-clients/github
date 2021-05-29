<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb\Discussions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\DeleteDiscussion;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetDiscussion;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\UpdateDiscussion;

final class CbDiscussionNumberRcb
{
    function get(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number): GetDiscussion
    {
        return new GetDiscussion($accept, $team_id, $discussion_number);
    }

    function delete(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number): DeleteDiscussion
    {
        return new DeleteDiscussion($accept, $team_id, $discussion_number);
    }

    function patch(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number): UpdateDiscussion
    {
        return new UpdateDiscussion($accept, $team_id, $discussion_number);
    }
}
