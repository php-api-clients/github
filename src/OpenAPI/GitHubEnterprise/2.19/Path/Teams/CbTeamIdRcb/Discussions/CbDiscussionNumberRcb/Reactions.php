<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Path\\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb;

final class Reactions
{
    function get(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Reactions\ListForTeamDiscussionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Reactions\ListForTeamDiscussionOperation($accept, $team_id, $discussion_number, $content, $per_page, $page);
    }
    function post(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Reactions\CreateForTeamDiscussionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Reactions\CreateForTeamDiscussionOperation($accept, $team_id, $discussion_number);
    }
}
