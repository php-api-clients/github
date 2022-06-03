<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Admin\Tokens;

final class CbTokenIdRcb
{
    function delete($token_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\DeletePersonalAccessToken
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\DeletePersonalAccessToken($token_id);
    }
}
