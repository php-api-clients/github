<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions;

final class CbDiscussionNumberRcb
{
    function get($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\GetDiscussionInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\GetDiscussionInOrg($org, $team_slug, $discussion_number);
    }
    function delete($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\DeleteDiscussionInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\DeleteDiscussionInOrg($org, $team_slug, $discussion_number);
    }
    function patch($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\UpdateDiscussionInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\UpdateDiscussionInOrg($org, $team_slug, $discussion_number);
    }
}
