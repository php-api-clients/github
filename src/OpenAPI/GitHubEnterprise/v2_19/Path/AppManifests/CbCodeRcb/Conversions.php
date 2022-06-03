<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\AppManifests\CbCodeRcb;

final class Conversions
{
    function post($code) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\CreateFromManifest
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\CreateFromManifest($code);
    }
}
