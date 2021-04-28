<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Apps;

final class GetSubscriptionPlanForAccount
{
    private const OPERATION_ID = 'apps/get-subscription-plan-for-account';
    /**account_id parameter**/
    public int $account_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($account_id)
    {
        $this->account_id = $account_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{account_id}'), array($this->account_id), '/marketplace_listing/accounts/{account_id}?'));
    }
    function validateResponse()
    {
    }
}
