<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\AppManifests\CbCodeRcb;

final class Conversions
{
    function post($code) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\CreateFromManifest
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\CreateFromManifest($code);
    }
}
