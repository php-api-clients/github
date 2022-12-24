<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Admin\Users\CbUsernameRcb;

final class Authorizations
{
    function post($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken($username);
    }
}