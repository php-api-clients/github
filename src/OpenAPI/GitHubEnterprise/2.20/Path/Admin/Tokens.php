<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Path\\Admin;

final class Tokens
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\ListPersonalAccessTokensOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\ListPersonalAccessTokensOperation($per_page, $page);
    }
}
