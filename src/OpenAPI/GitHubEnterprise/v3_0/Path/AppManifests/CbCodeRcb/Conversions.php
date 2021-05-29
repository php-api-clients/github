<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\AppManifests\CbCodeRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\CreateFromManifestOperation;

final class Conversions
{
    function post($code): CreateFromManifestOperation
    {
        return new CreateFromManifestOperation($code);
    }
}
