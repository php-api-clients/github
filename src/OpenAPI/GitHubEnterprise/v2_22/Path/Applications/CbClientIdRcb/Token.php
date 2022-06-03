<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Applications\CbClientIdRcb;

final class Token
{
    function post($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CheckToken
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CheckToken($client_id);
    }
    function delete($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteToken
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteToken($client_id);
    }
    function patch($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ResetToken
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ResetToken($client_id);
    }
}
