<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb;

final class Reactions
{
    function get($org, $team_slug, $discussion_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForTeamDiscussionInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForTeamDiscussionInOrg($org, $team_slug, $discussion_number, $content, $per_page, $page);
    }
    function post($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForTeamDiscussionInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForTeamDiscussionInOrg($org, $team_slug, $discussion_number);
    }
}
