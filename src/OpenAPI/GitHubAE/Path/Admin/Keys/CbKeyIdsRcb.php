<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Keys;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePublicKey;

final class CbKeyIdsRcb
{
    function delete($key_ids): DeletePublicKey
    {
        return new DeletePublicKey($key_ids);
    }
}
