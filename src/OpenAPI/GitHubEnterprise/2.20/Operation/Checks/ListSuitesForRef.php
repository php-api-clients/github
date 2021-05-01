<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Checks;

final class ListSuitesForRef
{
    private const OPERATION_ID = 'checks/list-suites-for-ref';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**ref parameter**/
    public string $ref;
    /**Filters check suites by GitHub App `id`.**/
    public int $app_id;
    /**Returns check runs with the specified `name`.**/
    public string $check_name;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $ref, $app_id, $check_name, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ref = $ref;
        $this->app_id = $app_id;
        $this->check_name = $check_name;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{ref}', '{app_id}', '{check_name}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->ref, $this->app_id, $this->check_name, $this->per_page, $this->page), '/repos/{owner}/{repo}/commits/{ref}/check-suites?app_id={app_id}&check_name={check_name}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
