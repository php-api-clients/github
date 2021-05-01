<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Applications\CbClientIdRcb;

final class Token
{
    function post($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CheckTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CheckTokenOperation($client_id);
    }
    function delete($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteTokenOperation($client_id);
    }
    function patch($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetTokenOperation($client_id);
    }
}
