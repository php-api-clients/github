<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users;

final class List_
{
    private const OPERATION_ID = 'users/list';
    /**A user ID. Only return users with an ID greater than this ID.**/
    private readonly int $since;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $since, int $per_page = 30)
    {
        $this->since = $since;
        $this->per_page = $per_page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{since}', '{per_page}'), array($this->since, $this->per_page), '/users?since={since}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
