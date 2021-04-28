<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\Email;

final class Visibility
{
    function patch() : \ApiClients\Client\Github\OpenAPI\Operation\Users\SetPrimaryEmailVisibilityForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\SetPrimaryEmailVisibilityForAuthenticatedOperation();
    }
}
