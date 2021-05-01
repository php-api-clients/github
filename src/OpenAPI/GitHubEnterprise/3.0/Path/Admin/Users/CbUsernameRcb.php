<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Path\\Admin\Users;

final class CbUsernameRcb
{
    function delete($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\EnterpriseAdmin\DeleteUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\EnterpriseAdmin\DeleteUserOperation($username);
    }
    function patch($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\EnterpriseAdmin\UpdateUsernameForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\EnterpriseAdmin\UpdateUsernameForUserOperation($username);
    }
}
