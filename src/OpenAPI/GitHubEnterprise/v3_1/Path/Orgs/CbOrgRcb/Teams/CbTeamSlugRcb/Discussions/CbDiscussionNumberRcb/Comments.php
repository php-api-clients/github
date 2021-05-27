<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb;

final class Comments
{
    function get($org, $team_slug, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionCommentsInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionCommentsInOrgOperation($org, $team_slug, $discussion_number, $direction, $per_page, $page);
    }
    function post($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionCommentInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionCommentInOrgOperation($org, $team_slug, $discussion_number);
    }
}
