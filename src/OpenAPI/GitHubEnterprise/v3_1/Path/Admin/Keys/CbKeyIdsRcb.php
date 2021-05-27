<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Admin\Keys;

final class CbKeyIdsRcb
{
    function delete($key_ids) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePublicKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePublicKeyOperation($key_ids);
    }
}
