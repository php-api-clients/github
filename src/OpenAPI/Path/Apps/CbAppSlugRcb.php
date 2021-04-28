<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Apps;

final class CbAppSlugRcb
{
    function get($app_slug) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetBySlugOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\GetBySlugOperation($app_slug);
    }
}
