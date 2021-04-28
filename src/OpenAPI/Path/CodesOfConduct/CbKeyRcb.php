<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\CodesOfConduct;

final class CbKeyRcb
{
    function get($key) : \ApiClients\Client\Github\OpenAPI\Operation\CodesOfConduct\GetConductCodeOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\CodesOfConduct\GetConductCodeOperation($key);
    }
}
