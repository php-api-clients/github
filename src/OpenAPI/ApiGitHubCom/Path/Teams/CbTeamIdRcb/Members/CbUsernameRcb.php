<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb\Members;

final class CbUsernameRcb
{
    function get($team_id, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMemberLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMemberLegacyOperation($team_id, $username);
    }
    function put($team_id, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddMemberLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddMemberLegacyOperation($team_id, $username);
    }
    function delete($team_id, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMemberLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMemberLegacyOperation($team_id, $username);
    }
}
