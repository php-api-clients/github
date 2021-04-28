<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Gists\CbGistIdRcb;

final class Star
{
    function get($gist_id) : \ApiClients\Client\Github\OpenAPI\Operation\Gists\CheckIsStarredOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\CheckIsStarredOperation($gist_id);
    }
    function put($gist_id) : \ApiClients\Client\Github\OpenAPI\Operation\Gists\StarOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\StarOperation($gist_id);
    }
    function delete($gist_id) : \ApiClients\Client\Github\OpenAPI\Operation\Gists\UnstarOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Gists\UnstarOperation($gist_id);
    }
}
