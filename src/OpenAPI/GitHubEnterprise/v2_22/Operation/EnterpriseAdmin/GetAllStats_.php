<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin;

final class GetAllStats_
{
    private const OPERATION_ID = 'enterprise-admin/get-all-stats';
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct()
    {
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array(), array(), '/enterprise/stats/gists?'));
    }
    function validateResponse()
    {
    }
}
