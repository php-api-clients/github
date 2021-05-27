<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\AppManifests\CbCodeRcb;

final class Conversions
{
    function post($code) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateFromManifestOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateFromManifestOperation($code);
    }
}
