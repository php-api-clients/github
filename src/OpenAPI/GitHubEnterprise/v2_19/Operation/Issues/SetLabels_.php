<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Issues;

final class SetLabels_
{
    private const OPERATION_ID = 'issues/set-labels';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**issue_number parameter**/
    public int $issue_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $issue_number)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issue_number;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{owner}', '{repo}', '{issue_number}'), array($this->owner, $this->repo, $this->issue_number), '/repos/{owner}/{repo}/issues/{issue_number}/labels?'));
    }
    function validateResponse()
    {
    }
}
