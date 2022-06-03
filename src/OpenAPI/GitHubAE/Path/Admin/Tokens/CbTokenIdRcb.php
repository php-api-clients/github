<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Tokens;

final class CbTokenIdRcb
{
    function delete($token_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePersonalAccessToken
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePersonalAccessToken($token_id);
    }
}
