<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Path\\Admin\Users\CbUsernameRcb;

final class Authorizations
{
    function post($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\CreateImpersonationOAuthTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\CreateImpersonationOAuthTokenOperation($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\DeleteImpersonationOAuthTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin\DeleteImpersonationOAuthTokenOperation($username);
    }
}
