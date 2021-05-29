<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\AppManifests\CbCodeRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\CreateFromManifestOperation;

final class Conversions
{
    function post($code): CreateFromManifestOperation
    {
        return new CreateFromManifestOperation($code);
    }
}
