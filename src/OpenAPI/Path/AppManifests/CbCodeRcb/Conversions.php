<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\AppManifests\CbCodeRcb;

final class Conversions
{
    function post($code) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\CreateFromManifestOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\CreateFromManifestOperation($code);
    }
}
