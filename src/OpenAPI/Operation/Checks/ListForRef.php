<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Checks;

final class ListForRef
{
    private const OPERATION_ID = 'checks/list-for-ref';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**ref parameter**/
    public string $ref;
    /**Returns check runs with the specified `name`.**/
    public string $check_name;
    /**Returns check runs with the specified `status`. Can be one of `queued`, `in_progress`, or `completed`.**/
    public string $status;
    /**Filters check runs by their `completed_at` timestamp. Can be one of `latest` (returning the most recent check runs) or `all`.**/
    public string $filter;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    /****/
    public int $app_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $ref, $check_name, $status, string $filter = 'latest', int $per_page = 30, int $page = 1, $app_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ref = $ref;
        $this->check_name = $check_name;
        $this->status = $status;
        $this->filter = $filter;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->app_id = $app_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{ref}', '{check_name}', '{status}', '{filter}', '{per_page}', '{page}', '{app_id}'), array($this->owner, $this->repo, $this->ref, $this->check_name, $this->status, $this->filter, $this->per_page, $this->page, $this->app_id), '/repos/{owner}/{repo}/commits/{ref}/check-runs?check_name={check_name}&status={status}&filter={filter}&per_page={per_page}&page={page}&app_id={app_id}'));
    }
    function validateResponse()
    {
    }
}
