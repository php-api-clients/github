<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Admin\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken;

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
