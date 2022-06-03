<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Applications\CbClientIdRcb\Grants;

final class CbAccessTokenRcb
{
    function delete($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\RevokeGrantForApplication
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\RevokeGrantForApplication($client_id, $access_token);
    }
}
