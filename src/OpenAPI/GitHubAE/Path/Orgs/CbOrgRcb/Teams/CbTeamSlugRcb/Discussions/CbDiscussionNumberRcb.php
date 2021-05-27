<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions;

final class CbDiscussionNumberRcb
{
    function get($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionInOrgOperation($org, $team_slug, $discussion_number);
    }
    function delete($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionInOrgOperation($org, $team_slug, $discussion_number);
    }
    function patch($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionInOrgOperation($org, $team_slug, $discussion_number);
    }
}
