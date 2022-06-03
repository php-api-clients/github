<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Teams;

final class CbTeamIdRcb
{
    function get($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\GetLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\GetLegacy($team_id);
    }
    function delete($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\DeleteLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\DeleteLegacy($team_id);
    }
    function patch($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\UpdateLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\UpdateLegacy($team_id);
    }
}
