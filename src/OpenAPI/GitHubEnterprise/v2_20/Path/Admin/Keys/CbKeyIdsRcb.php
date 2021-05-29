<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Admin\Keys;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeletePublicKeyOperation;

final class CbKeyIdsRcb
{
    function delete($key_ids): DeletePublicKeyOperation
    {
        return new DeletePublicKeyOperation($key_ids);
    }
}
