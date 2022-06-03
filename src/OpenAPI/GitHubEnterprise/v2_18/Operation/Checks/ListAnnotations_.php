<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Checks;

final class ListAnnotations_
{
    private const OPERATION_ID = 'checks/list-annotations';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**check_run_id parameter**/
    public int $check_run_id;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $check_run_id, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->check_run_id = $check_run_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{check_run_id}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->check_run_id, $this->per_page, $this->page), '/repos/{owner}/{repo}/check-runs/{check_run_id}/annotations?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
