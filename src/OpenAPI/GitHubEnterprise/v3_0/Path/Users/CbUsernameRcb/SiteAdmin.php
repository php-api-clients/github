<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\DemoteSiteAdministratorOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\PromoteUserToBeSiteAdministratorOperation;

final class SiteAdmin
{
    function put($username): PromoteUserToBeSiteAdministratorOperation
    {
        return new PromoteUserToBeSiteAdministratorOperation($username);
    }

    function delete($username): DemoteSiteAdministratorOperation
    {
        return new DemoteSiteAdministratorOperation($username);
    }
}
