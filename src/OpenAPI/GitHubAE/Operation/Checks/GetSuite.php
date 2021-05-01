<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks;

final class GetSuite
{
    private const OPERATION_ID = 'checks/get-suite';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**check_suite_id parameter**/
    public int $check_suite_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $check_suite_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->check_suite_id = $check_suite_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{check_suite_id}'), array($this->owner, $this->repo, $this->check_suite_id), '/repos/{owner}/{repo}/check-suites/{check_suite_id}?'));
    }
    function validateResponse()
    {
    }
}
