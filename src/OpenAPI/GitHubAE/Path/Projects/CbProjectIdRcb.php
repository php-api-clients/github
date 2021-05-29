<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Projects;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\DeleteOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\UpdateOperation;

final class CbProjectIdRcb
{
    function get($project_id): GetOperation
    {
        return new GetOperation($project_id);
    }

    function delete($project_id): DeleteOperation
    {
        return new DeleteOperation($project_id);
    }

    function patch($project_id): UpdateOperation
    {
        return new UpdateOperation($project_id);
    }
}
