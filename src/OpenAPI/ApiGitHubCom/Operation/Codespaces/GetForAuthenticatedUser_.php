<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class GetForAuthenticatedUser_
{
    private const OPERATION_ID = 'codespaces/get-for-authenticated-user';
    /**The name of the codespace.**/
    private readonly string $codespace_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $codespace_name)
    {
        $this->codespace_name = $codespace_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{codespace_name}'), array($this->codespace_name), '/user/codespaces/{codespace_name}'));
    }
    function validateResponse()
    {
    }
}
