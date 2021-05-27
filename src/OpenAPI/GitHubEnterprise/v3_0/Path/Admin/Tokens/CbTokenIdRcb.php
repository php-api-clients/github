<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Admin\Tokens;

final class CbTokenIdRcb
{
    function delete($token_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\DeletePersonalAccessTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\DeletePersonalAccessTokenOperation($token_id);
    }
}
