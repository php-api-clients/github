<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Path\\Authorizations;

final class CbAuthorizationIdRcb
{
    function get($authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\OauthAuthorizations\GetAuthorizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\OauthAuthorizations\GetAuthorizationOperation($authorization_id);
    }
    function delete($authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\OauthAuthorizations\DeleteAuthorizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\OauthAuthorizations\DeleteAuthorizationOperation($authorization_id);
    }
    function patch($authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\OauthAuthorizations\UpdateAuthorizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\OauthAuthorizations\UpdateAuthorizationOperation($authorization_id);
    }
}
