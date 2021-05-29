<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\AppManifests\CbCodeRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateFromManifestOperation;

final class Conversions
{
    function post($code): CreateFromManifestOperation
    {
        return new CreateFromManifestOperation($code);
    }
}
