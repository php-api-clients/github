<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Keys;

final class CbKeyIdsRcb
{
    function delete($key_ids) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePublicKey
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePublicKey($key_ids);
    }
}
