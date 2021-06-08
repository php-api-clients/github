<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Projects;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects\Delete;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects\Get;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects\Update;

final class CbProjectIdRcb
{
    function get($project_id): Get
    {
        return new Get($project_id);
    }

    function delete($project_id): Delete
    {
        return new Delete($project_id);
    }

    function patch($project_id): Update
    {
        return new Update($project_id);
    }
}
