<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class UpdateForAuthenticatedUser
{
    private const OPERATION_ID = 'codespaces/update-for-authenticated-user';
    /**The name of the codespace.**/
    public string $codespace_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($codespace_name)
    {
        $this->codespace_name = $codespace_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{codespace_name}'), array($this->codespace_name), '/user/codespaces/{codespace_name}?'));
    }
    function validateResponse()
    {
    }
}
