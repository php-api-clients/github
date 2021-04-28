<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\GpgKeys;

final class CbGpgKeyIdRcb
{
    function get($gpg_key_id) : \ApiClients\Client\Github\OpenAPI\Operation\Users\GetGpgKeyForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\GetGpgKeyForAuthenticatedOperation($gpg_key_id);
    }
    function delete($gpg_key_id) : \ApiClients\Client\Github\OpenAPI\Operation\Users\DeleteGpgKeyForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\DeleteGpgKeyForAuthenticatedOperation($gpg_key_id);
    }
}
