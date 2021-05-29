<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateOrgOperation;

final class Organizations
{
    function post(): CreateOrgOperation
    {
        return new CreateOrgOperation();
    }
}
