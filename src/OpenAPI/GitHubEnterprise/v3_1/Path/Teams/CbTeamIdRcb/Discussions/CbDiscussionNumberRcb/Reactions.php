<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb;

final class Reactions
{
    function get($team_id, $discussion_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionLegacy($team_id, $discussion_number, $content, $per_page, $page);
    }
    function post($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionLegacy($team_id, $discussion_number);
    }
}
