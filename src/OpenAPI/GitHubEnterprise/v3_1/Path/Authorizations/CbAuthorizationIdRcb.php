<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Authorizations;

final class CbAuthorizationIdRcb
{
    function get($authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetAuthorization($authorization_id);
    }
    function delete($authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\DeleteAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\DeleteAuthorization($authorization_id);
    }
    function patch($authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\UpdateAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\UpdateAuthorization($authorization_id);
    }
}
