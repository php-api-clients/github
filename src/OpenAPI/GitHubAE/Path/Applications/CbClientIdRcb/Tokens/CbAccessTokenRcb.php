<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Applications\CbClientIdRcb\Tokens;

final class CbAccessTokenRcb
{
    function post($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetAuthorization($client_id, $access_token);
    }
}
