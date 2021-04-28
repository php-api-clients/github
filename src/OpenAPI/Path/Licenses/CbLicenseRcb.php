<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Licenses;

final class CbLicenseRcb
{
    function get($license) : \ApiClients\Client\Github\OpenAPI\Operation\Licenses\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Licenses\GetOperation($license);
    }
}
