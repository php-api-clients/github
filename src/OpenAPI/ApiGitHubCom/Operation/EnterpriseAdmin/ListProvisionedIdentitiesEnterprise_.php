<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin;

final class ListProvisionedIdentitiesEnterprise_
{
    private const OPERATION_ID = 'enterprise-admin/list-provisioned-identities-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**Used for pagination: the index of the first result to return.**/
    public int $startIndex;
    /**Used for pagination: the number of results to return.**/
    public int $count;
    /**filter results**/
    public string $filter;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise, $startIndex, $count, $filter)
    {
        $this->enterprise = $enterprise;
        $this->startIndex = $startIndex;
        $this->count = $count;
        $this->filter = $filter;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{enterprise}', '{startIndex}', '{count}', '{filter}'), array($this->enterprise, $this->startIndex, $this->count, $this->filter), '/scim/v2/enterprises/{enterprise}/Users?startIndex={startIndex}&count={count}&filter={filter}'));
    }
    function validateResponse()
    {
    }
}
