<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\AppManifests\CbCodeRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\CreateFromManifest;

final class Conversions
{
    function post($code): CreateFromManifest
    {
        return new CreateFromManifest($code);
    }
}
