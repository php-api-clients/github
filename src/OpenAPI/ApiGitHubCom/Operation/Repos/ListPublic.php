<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class ListPublic
{
    private const OPERATION_ID = 'repos/list-public';
    /**A repository ID. Only return repositories with an ID greater than this ID.**/
    public int $since;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($since)
    {
        $this->since = $since;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{since}'), array($this->since), '/repositories?since={since}'));
    }
    function validateResponse()
    {
    }
}
