<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\AppManifests\CbCodeRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\CreateFromManifestOperation;

final class Conversions
{
    function post($code): CreateFromManifestOperation
    {
        return new CreateFromManifestOperation($code);
    }
}
