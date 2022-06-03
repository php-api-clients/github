<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks;

final class ListForSuite_
{
    private const OPERATION_ID = 'checks/list-for-suite';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The unique identifier of the check suite.**/
    public int $check_suite_id;
    /**Returns check runs with the specified `name`.**/
    public string $check_name;
    /**Returns check runs with the specified `status`.**/
    public string $status;
    /**Filters check runs by their `completed_at` timestamp. `latest` returns the most recent check runs.**/
    public string $filter;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $check_suite_id, $check_name, $status, string $filter = 'latest', int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->check_suite_id = $check_suite_id;
        $this->check_name = $check_name;
        $this->status = $status;
        $this->filter = $filter;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{check_suite_id}', '{check_name}', '{status}', '{filter}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->check_suite_id, $this->check_name, $this->status, $this->filter, $this->per_page, $this->page), '/repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs?check_name={check_name}&status={status}&filter={filter}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
