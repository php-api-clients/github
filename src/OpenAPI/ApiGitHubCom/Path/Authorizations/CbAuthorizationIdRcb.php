<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Authorizations;

final class CbAuthorizationIdRcb
{
    function get($authorization_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\GetAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\GetAuthorization($authorization_id);
    }
    function delete($authorization_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\DeleteAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\DeleteAuthorization($authorization_id);
    }
    function patch($authorization_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\UpdateAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\UpdateAuthorization($authorization_id);
    }
}
