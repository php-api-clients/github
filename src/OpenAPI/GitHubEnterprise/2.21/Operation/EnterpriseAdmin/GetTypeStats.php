<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\EnterpriseAdmin;

final class GetTypeStats
{
    private const OPERATION_ID = 'enterprise-admin/get-type-stats';
    /****/
    public string $type;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($type)
    {
        $this->type = $type;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{type}'), array($this->type), '/enterprise/stats/{type}?'));
    }
    function validateResponse()
    {
    }
}
