<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Admin\Keys;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\DeletePublicKey;

final class CbKeyIdsRcb
{
    function delete($key_ids): DeletePublicKey
    {
        return new DeletePublicKey($key_ids);
    }
}
