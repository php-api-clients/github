<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Applications\CbClientIdRcb\Tokens;

final class CbAccessTokenRcb
{
    function get($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CheckAuthorizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CheckAuthorizationOperation($client_id, $access_token);
    }
    function post($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetAuthorizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetAuthorizationOperation($client_id, $access_token);
    }
    function delete($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RevokeAuthorizationForApplicationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RevokeAuthorizationForApplicationOperation($client_id, $access_token);
    }
}