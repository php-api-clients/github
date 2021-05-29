<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Admin\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreateImpersonationOAuthTokenOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeleteImpersonationOAuthTokenOperation;

final class Authorizations
{
    function post($username): CreateImpersonationOAuthTokenOperation
    {
        return new CreateImpersonationOAuthTokenOperation($username);
    }

    function delete($username): DeleteImpersonationOAuthTokenOperation
    {
        return new DeleteImpersonationOAuthTokenOperation($username);
    }
}
