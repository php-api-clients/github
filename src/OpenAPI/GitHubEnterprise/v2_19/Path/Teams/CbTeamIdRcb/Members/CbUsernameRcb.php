<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Teams\CbTeamIdRcb\Members;

final class CbUsernameRcb
{
    function get($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\GetMemberLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\GetMemberLegacy($team_id, $username);
    }
    function put($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\AddMemberLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\AddMemberLegacy($team_id, $username);
    }
    function delete($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\RemoveMemberLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\RemoveMemberLegacy($team_id, $username);
    }
}
