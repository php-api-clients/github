<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\AppManifests\CbCodeRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateFromManifest;

final class Conversions
{
    function post($code): CreateFromManifest
    {
        return new CreateFromManifest($code);
    }
}
