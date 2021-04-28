<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Gists\CbGistIdRcb;

final class CbShaRcb
{
    function get($gist_id, $sha) : \ApiClients\Client\Github\OpenAPI\Operation\Gists\GetRevisionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\GetRevisionOperation($gist_id, $sha);
    }
}
