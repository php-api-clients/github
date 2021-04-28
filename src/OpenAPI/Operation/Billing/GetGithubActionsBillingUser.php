<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Billing;

final class GetGithubActionsBillingUser
{
    private const OPERATION_ID = 'billing/get-github-actions-billing-user';
    /****/
    public string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($username)
    {
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}'), array($this->username), '/users/{username}/settings/billing/actions?'));
    }
    function validateResponse()
    {
    }
}
