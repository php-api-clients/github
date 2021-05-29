<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Admin;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreateOrg;

final class Organizations
{
    function post(): CreateOrg
    {
        return new CreateOrg();
    }
}
