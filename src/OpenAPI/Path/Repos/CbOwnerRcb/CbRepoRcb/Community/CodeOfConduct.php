<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Community;

final class CodeOfConduct
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\CodesOfConduct\GetForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\CodesOfConduct\GetForRepoOperation($owner, $repo);
    }
}
