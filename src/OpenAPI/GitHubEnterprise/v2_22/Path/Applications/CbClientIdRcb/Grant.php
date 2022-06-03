<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Applications\CbClientIdRcb;

final class Grant
{
    function delete($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteAuthorization($client_id);
    }
}
