<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\AppManifests\CbCodeRcb;

final class Conversions
{
    function post($code) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateFromManifestOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateFromManifestOperation($code);
    }
}
