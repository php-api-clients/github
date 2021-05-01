<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Gists;

final class ListForks
{
    private const OPERATION_ID = 'gists/list-forks';
    /**gist_id parameter**/
    public string $gist_id;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($gist_id, int $per_page = 30, int $page = 1)
    {
        $this->gist_id = $gist_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{gist_id}', '{per_page}', '{page}'), array($this->gist_id, $this->per_page, $this->page), '/gists/{gist_id}/forks?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
