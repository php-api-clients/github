<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Authorizations;

final class CbAuthorizationIdRcb
{
    function get($authorization_id) : \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\GetAuthorizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\GetAuthorizationOperation($authorization_id);
    }
    function delete($authorization_id) : \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\DeleteAuthorizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\DeleteAuthorizationOperation($authorization_id);
    }
    function patch($authorization_id) : \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\UpdateAuthorizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\UpdateAuthorizationOperation($authorization_id);
    }
}
