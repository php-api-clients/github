<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb;

final class Reactions
{
    function get(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForTeamDiscussion
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForTeamDiscussion($accept, $team_id, $discussion_number, $content, $per_page, $page);
    }
    function post(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForTeamDiscussion
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForTeamDiscussion($accept, $team_id, $discussion_number);
    }
}
