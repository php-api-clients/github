<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks;

final class ListForRef_
{
    private const OPERATION_ID = 'checks/list-for-ref';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**ref parameter**/
    private readonly string $ref;
    /**Returns check runs with the specified `name`.**/
    private readonly string $check_name;
    /**Returns check runs with the specified `status`.**/
    private readonly string $status;
    /**Filters check runs by their `completed_at` timestamp. `latest` returns the most recent check runs.**/
    private readonly string $filter;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    private readonly int $app_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $ref, string $check_name, string $status, string $filter = 'latest', int $per_page = 30, int $page = 1, int $app_id)
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
