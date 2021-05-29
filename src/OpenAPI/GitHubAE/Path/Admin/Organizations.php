<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateOrgOperation;

final class Organizations
{
    function post(): CreateOrgOperation
    {
        return new CreateOrgOperation();
    }
}
