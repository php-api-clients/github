<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken;

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
