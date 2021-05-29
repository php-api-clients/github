<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionInOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionInOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionInOrgOperation;

final class CbDiscussionNumberRcb
{
    function get($org, $team_slug, $discussion_number): GetDiscussionInOrgOperation
    {
        return new GetDiscussionInOrgOperation($org, $team_slug, $discussion_number);
    }

    function delete($org, $team_slug, $discussion_number): DeleteDiscussionInOrgOperation
    {
        return new DeleteDiscussionInOrgOperation($org, $team_slug, $discussion_number);
    }

    function patch($org, $team_slug, $discussion_number): UpdateDiscussionInOrgOperation
    {
        return new UpdateDiscussionInOrgOperation($org, $team_slug, $discussion_number);
    }
}
