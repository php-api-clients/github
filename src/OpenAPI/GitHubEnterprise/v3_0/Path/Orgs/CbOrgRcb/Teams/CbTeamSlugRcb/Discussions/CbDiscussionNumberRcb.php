<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteDiscussionInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetDiscussionInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateDiscussionInOrg;

final class CbDiscussionNumberRcb
{
    function get($org, $team_slug, $discussion_number): GetDiscussionInOrg
    {
        return new GetDiscussionInOrg($org, $team_slug, $discussion_number);
    }

    function delete($org, $team_slug, $discussion_number): DeleteDiscussionInOrg
    {
        return new DeleteDiscussionInOrg($org, $team_slug, $discussion_number);
    }

    function patch($org, $team_slug, $discussion_number): UpdateDiscussionInOrg
    {
        return new UpdateDiscussionInOrg($org, $team_slug, $discussion_number);
    }
}
