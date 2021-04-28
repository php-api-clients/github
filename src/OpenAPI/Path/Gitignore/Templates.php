<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Gitignore;

final class Templates
{
    function get() : \ApiClients\Client\Github\OpenAPI\Operation\Gitignore\GetAllTemplatesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gitignore\GetAllTemplatesOperation();
    }
}
