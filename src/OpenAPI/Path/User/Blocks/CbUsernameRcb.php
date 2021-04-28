<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\Blocks;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\Operation\Users\CheckBlockedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\CheckBlockedOperation($username);
    }
    function put($username) : \ApiClients\Client\Github\OpenAPI\Operation\Users\BlockOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\BlockOperation($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\Operation\Users\UnblockOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\UnblockOperation($username);
    }
}
