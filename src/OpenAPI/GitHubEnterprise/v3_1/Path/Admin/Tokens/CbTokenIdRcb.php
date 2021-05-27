<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Admin\Tokens;

final class CbTokenIdRcb
{
    function delete($token_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePersonalAccessTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePersonalAccessTokenOperation($token_id);
    }
}
