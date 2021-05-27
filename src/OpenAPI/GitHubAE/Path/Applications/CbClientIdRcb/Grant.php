<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Applications\CbClientIdRcb;

final class Grant
{
    function delete($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteAuthorizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteAuthorizationOperation($client_id);
    }
}
