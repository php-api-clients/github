<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Issues;

final class RemoveLabel_
{
    private const OPERATION_ID = 'issues/remove-label';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**issue_number parameter**/
    public int $issue_number;
    /****/
    public string $name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $issue_number, $name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issue_number;
        $this->name = $name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{issue_number}', '{name}'), array($this->owner, $this->repo, $this->issue_number, $this->name), '/repos/{owner}/{repo}/issues/{issue_number}/labels/{name}?'));
    }
    function validateResponse()
    {
    }
}
