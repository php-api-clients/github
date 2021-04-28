<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Applications\Grants;

final class CbGrantIdRcb
{
    function get($grant_id) : \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\GetGrantOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\GetGrantOperation($grant_id);
    }
    function delete($grant_id) : \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\DeleteGrantOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\DeleteGrantOperation($grant_id);
    }
}
