<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin;

final class GetPagesStats_
{
    private const OPERATION_ID = 'enterprise-admin/get-pages-stats';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/enterprise/stats/pages?'));
    }
    function validateResponse()
    {
    }
}
