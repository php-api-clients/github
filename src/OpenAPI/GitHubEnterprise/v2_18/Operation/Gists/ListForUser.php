<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Gists;

final class ListForUser
{
    private const OPERATION_ID = 'gists/list-for-user';
    /****/
    public string $username;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    public string $since;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($username, $since, int $per_page = 30, int $page = 1)
    {
        $this->username = $username;
        $this->since = $since;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}', '{since}', '{per_page}', '{page}'), array($this->username, $this->since, $this->per_page, $this->page), '/users/{username}/gists?since={since}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
