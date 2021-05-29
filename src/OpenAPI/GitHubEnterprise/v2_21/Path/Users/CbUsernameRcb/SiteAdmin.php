<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\DemoteSiteAdministratorOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\PromoteUserToBeSiteAdministratorOperation;

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
