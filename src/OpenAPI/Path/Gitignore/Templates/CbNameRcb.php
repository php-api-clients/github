<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Gitignore\Templates;

final class CbNameRcb
{
    function get($name) : \ApiClients\Client\Github\OpenAPI\Operation\Gitignore\GetTemplateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gitignore\GetTemplateOperation($name);
    }
}
