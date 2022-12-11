<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks;

final class ListSuitesForRef_
{
    private const OPERATION_ID = 'checks/list-suites-for-ref';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**ref parameter**/
    private readonly string $ref;
    /**Filters check suites by GitHub App `id`.**/
    private readonly int $app_id;
    /**Returns check runs with the specified `name`.**/
    private readonly string $check_name;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $ref, int $app_id, string $check_name, int $per_page = 30, int $page = 1)
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
