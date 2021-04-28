<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects;

final class CbProjectIdRcb
{
    function get($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\CheckPermissionsForProjectInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\CheckPermissionsForProjectInOrgOperation($org, $team_slug, $project_id);
    }
    function put($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\AddOrUpdateProjectPermissionsInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\AddOrUpdateProjectPermissionsInOrgOperation($org, $team_slug, $project_id);
    }
    function delete($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\RemoveProjectInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\RemoveProjectInOrgOperation($org, $team_slug, $project_id);
    }
}
