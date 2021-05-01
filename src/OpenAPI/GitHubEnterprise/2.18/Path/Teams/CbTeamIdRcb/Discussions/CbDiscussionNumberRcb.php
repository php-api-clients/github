<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path\\Teams\CbTeamIdRcb\Discussions;

final class CbDiscussionNumberRcb
{
    function get(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\GetDiscussionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\GetDiscussionOperation($accept, $team_id, $discussion_number);
    }
    function delete(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\DeleteDiscussionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\DeleteDiscussionOperation($accept, $team_id, $discussion_number);
    }
    function patch(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\UpdateDiscussionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Teams\UpdateDiscussionOperation($accept, $team_id, $discussion_number);
    }
}
