<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams\CbTeamIdRcb\Discussions;

final class CbDiscussionNumberRcb
{
    function get($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionLegacy($team_id, $discussion_number);
    }
    function delete($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionLegacy($team_id, $discussion_number);
    }
    function patch($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionLegacy($team_id, $discussion_number);
    }
}
