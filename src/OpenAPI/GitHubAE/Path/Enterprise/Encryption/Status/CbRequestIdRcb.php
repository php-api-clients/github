<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Enterprise\Encryption\Status;

final class CbRequestIdRcb
{
    function get($request_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetEncryptionStatusOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetEncryptionStatusOperation($request_id);
    }
}
