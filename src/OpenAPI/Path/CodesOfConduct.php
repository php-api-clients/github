<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class CodesOfConduct
{
    function get() : \ApiClients\Client\Github\OpenAPI\Operation\CodesOfConduct\GetAllCodesOfConductOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\CodesOfConduct\GetAllCodesOfConductOperation();
    }
}
