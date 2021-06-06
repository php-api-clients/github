<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Applications\CbClientIdRcb\Grants;

final class CbAccessTokenRcb
{
    function delete($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeGrantForApplication
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeGrantForApplication($client_id, $access_token);
    }
}
