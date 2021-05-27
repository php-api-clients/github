<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Users\CbUsernameRcb;

final class Authorizations
{
    function post($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateImpersonationOAuthTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateImpersonationOAuthTokenOperation($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteImpersonationOAuthTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteImpersonationOAuthTokenOperation($username);
    }
}
