<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Admin;

final class Organizations
{
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateOrgOperation();
    }
}
