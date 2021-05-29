<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Admin\Organizations;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\UpdateOrgNameOperation;

final class CbOrgRcb
{
    function patch($org): UpdateOrgNameOperation
    {
        return new UpdateOrgNameOperation($org);
    }
}
