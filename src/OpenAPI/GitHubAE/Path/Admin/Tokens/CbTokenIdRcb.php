<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Tokens;

final class CbTokenIdRcb
{
    function delete($token_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePersonalAccessTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePersonalAccessTokenOperation($token_id);
    }
}
