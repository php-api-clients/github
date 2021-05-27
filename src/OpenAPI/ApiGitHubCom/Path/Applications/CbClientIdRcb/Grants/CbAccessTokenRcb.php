<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Applications\CbClientIdRcb\Grants;

final class CbAccessTokenRcb
{
    function delete($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeGrantForApplicationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeGrantForApplicationOperation($client_id, $access_token);
    }
}
