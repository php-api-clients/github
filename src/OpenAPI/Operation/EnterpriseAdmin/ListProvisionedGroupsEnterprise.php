<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin;

final class ListProvisionedGroupsEnterprise
{
    private const OPERATION_ID = 'enterprise-admin/list-provisioned-groups-enterprise';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    public string $enterprise;
    /**Used for pagination: the index of the first result to return.**/
    public int $startIndex;
    /**Used for pagination: the number of results to return.**/
    public int $count;
    /**filter results**/
    public string $filter;
    /**attributes to exclude**/
    public string $excludedAttributes;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($enterprise, $startIndex, $count, $filter, $excludedAttributes)
    {
        $this->enterprise = $enterprise;
        $this->startIndex = $startIndex;
        $this->count = $count;
        $this->filter = $filter;
        $this->excludedAttributes = $excludedAttributes;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{enterprise}', '{startIndex}', '{count}', '{filter}', '{excludedAttributes}'), array($this->enterprise, $this->startIndex, $this->count, $this->filter, $this->excludedAttributes), '/scim/v2/enterprises/{enterprise}/Groups?startIndex={startIndex}&count={count}&filter={filter}&excludedAttributes={excludedAttributes}'));
    }
    function validateResponse()
    {
    }
}
