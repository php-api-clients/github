<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\\Setup\Api\Settings;

final class AuthorizedKeys
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetAllAuthorizedSshKeysOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetAllAuthorizedSshKeysOperation();
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\AddAuthorizedSshKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\AddAuthorizedSshKeyOperation();
    }
    function delete() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\RemoveAuthorizedSshKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\RemoveAuthorizedSshKeyOperation();
    }
}