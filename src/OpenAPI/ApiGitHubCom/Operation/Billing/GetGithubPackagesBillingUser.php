<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing;

final class GetGithubPackagesBillingUser
{
    private const OPERATION_ID = 'billing/get-github-packages-billing-user';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}'), array($this->username), '/users/{username}/settings/billing/packages?'));
    }
    function validateResponse()
    {
    }
}
