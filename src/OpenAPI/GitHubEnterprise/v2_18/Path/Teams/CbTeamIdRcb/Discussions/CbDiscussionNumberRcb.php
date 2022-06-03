<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb\Discussions;

final class CbDiscussionNumberRcb
{
    function get(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetDiscussion
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetDiscussion($accept, $team_id, $discussion_number);
    }
    function delete(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\DeleteDiscussion
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\DeleteDiscussion($accept, $team_id, $discussion_number);
    }
    function patch(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\UpdateDiscussion
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\UpdateDiscussion($accept, $team_id, $discussion_number);
    }
}
