<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionInOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionInOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionInOrg;

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
