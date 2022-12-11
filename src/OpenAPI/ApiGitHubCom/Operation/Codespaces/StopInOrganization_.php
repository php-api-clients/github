<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class StopInOrganization_
{
    private const OPERATION_ID = 'codespaces/stop-in-organization';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The handle for the GitHub user account.**/
    private readonly string $username;
    /**The name of the codespace.**/
    private readonly string $codespace_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $username, string $codespace_name)
    {
        $this->org = $org;
        $this->username = $username;
        $this->codespace_name = $codespace_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{org}', '{username}', '{codespace_name}'), array($this->org, $this->username, $this->codespace_name), '/orgs/{org}/members/{username}/codespaces/{codespace_name}/stop'));
    }
    function validateResponse()
    {
    }
}
