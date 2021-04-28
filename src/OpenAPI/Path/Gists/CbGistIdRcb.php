<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Gists;

final class CbGistIdRcb
{
    function get($gist_id) : \ApiClients\Client\Github\OpenAPI\Operation\Gists\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\GetOperation($gist_id);
    }
    function delete($gist_id) : \ApiClients\Client\Github\OpenAPI\Operation\Gists\DeleteOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\DeleteOperation($gist_id);
    }
    function patch($gist_id) : \ApiClients\Client\Github\OpenAPI\Operation\Gists\UpdateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\UpdateOperation($gist_id);
    }
}
