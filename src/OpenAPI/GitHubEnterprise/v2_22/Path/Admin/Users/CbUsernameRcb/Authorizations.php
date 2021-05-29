<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Admin\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken;

final class Authorizations
{
    function post($username): CreateImpersonationOAuthToken
    {
        return new CreateImpersonationOAuthToken($username);
    }

    function delete($username): DeleteImpersonationOAuthToken
    {
        return new DeleteImpersonationOAuthToken($username);
    }
}
