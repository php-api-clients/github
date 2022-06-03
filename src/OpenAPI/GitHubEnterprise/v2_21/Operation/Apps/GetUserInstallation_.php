<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps;

final class GetUserInstallation_
{
    private const OPERATION_ID = 'apps/get-user-installation';
    /**This API is under preview and subject to change.**/
    public string $accept;
    /****/
    public string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $accept = 'application/vnd.github.machine-man-preview+json', $username)
    {
        $this->accept = $accept;
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
