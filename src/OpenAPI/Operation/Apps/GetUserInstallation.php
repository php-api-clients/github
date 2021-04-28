<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Apps;

final class GetUserInstallation
{
    private const OPERATION_ID = 'apps/get-user-installation';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}'), array($this->username), '/users/{username}/installation?'));
    }
    function validateResponse()
    {
    }
}
