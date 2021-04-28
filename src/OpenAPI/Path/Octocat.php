<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class Octocat
{
    function get($s) : \ApiClients\Client\Github\OpenAPI\Operation\Meta\GetOctocatOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Meta\GetOctocatOperation($s);
    }
}
