<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Keys;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePublicKeyOperation;

final class CbKeyIdsRcb
{
    function delete($key_ids): DeletePublicKeyOperation
    {
        return new DeletePublicKeyOperation($key_ids);
    }
}
