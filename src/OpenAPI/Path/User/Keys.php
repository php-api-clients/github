<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User;

final class Keys
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Users\ListPublicSshKeysForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\ListPublicSshKeysForAuthenticatedOperation($per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\Operation\Users\CreatePublicSshKeyForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\CreatePublicSshKeyForAuthenticatedOperation();
    }
}
