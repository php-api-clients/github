<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Teams\CbTeamIdRcb\Discussions;

final class CbDiscussionNumberRcb
{
    function get($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\GetDiscussionLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\GetDiscussionLegacyOperation($team_id, $discussion_number);
    }
    function delete($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\DeleteDiscussionLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\DeleteDiscussionLegacyOperation($team_id, $discussion_number);
    }
    function patch($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\UpdateDiscussionLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\UpdateDiscussionLegacyOperation($team_id, $discussion_number);
    }
}
