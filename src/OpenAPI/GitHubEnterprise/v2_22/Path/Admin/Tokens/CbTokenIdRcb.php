<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Admin\Tokens;

final class CbTokenIdRcb
{
    function delete($token_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\DeletePersonalAccessToken
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\DeletePersonalAccessToken($token_id);
    }
}
