<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams;

final class CbTeamIdRcb
{
    function get($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\Get($team_id);
    }
    function delete($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\Delete
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\Delete($team_id);
    }
    function patch($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\Update($team_id);
    }
}
