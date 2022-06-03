<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams;

final class CbTeamIdRcb
{
    function get($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetLegacy($team_id);
    }
    function delete($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteLegacy($team_id);
    }
    function patch($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateLegacy($team_id);
    }
}
