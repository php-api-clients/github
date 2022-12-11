<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks;

final class RerequestSuite_
{
    private const OPERATION_ID = 'checks/rerequest-suite';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the check suite.**/
    private readonly int $check_suite_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $check_suite_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->check_suite_id = $check_suite_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{check_suite_id}'), array($this->owner, $this->repo, $this->check_suite_id), '/repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest'));
    }
    function validateResponse()
    {
    }
}
