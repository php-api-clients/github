<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Authorizations;

final class CbAuthorizationIdRcb
{
    function get($authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\GetAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\GetAuthorization($authorization_id);
    }
    function delete($authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\DeleteAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\DeleteAuthorization($authorization_id);
    }
    function patch($authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\UpdateAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations\UpdateAuthorization($authorization_id);
    }
}
