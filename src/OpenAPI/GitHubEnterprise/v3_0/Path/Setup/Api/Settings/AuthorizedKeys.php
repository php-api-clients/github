<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Setup\Api\Settings;

final class AuthorizedKeys
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetAllAuthorizedSshKeys
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetAllAuthorizedSshKeys();
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\AddAuthorizedSshKey
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\AddAuthorizedSshKey();
    }
    function delete() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\RemoveAuthorizedSshKey
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\RemoveAuthorizedSshKey();
    }
}
