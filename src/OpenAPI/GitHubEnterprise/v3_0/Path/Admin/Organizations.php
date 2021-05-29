<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\CreateOrgOperation;

final class Organizations
{
    function post(): CreateOrgOperation
    {
        return new CreateOrgOperation();
    }
}
