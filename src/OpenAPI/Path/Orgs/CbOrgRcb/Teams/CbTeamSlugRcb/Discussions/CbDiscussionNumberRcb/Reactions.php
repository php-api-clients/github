<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb;

final class Reactions
{
    function get($org, $team_slug, $discussion_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Reactions\ListForTeamDiscussionInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Reactions\ListForTeamDiscussionInOrgOperation($org, $team_slug, $discussion_number, $content, $per_page, $page);
    }
    function post($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\Operation\Reactions\CreateForTeamDiscussionInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Reactions\CreateForTeamDiscussionInOrgOperation($org, $team_slug, $discussion_number);
    }
}
