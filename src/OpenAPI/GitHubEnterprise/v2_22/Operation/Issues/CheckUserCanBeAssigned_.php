<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues;

final class CheckUserCanBeAssigned_
{
    private const OPERATION_ID = 'issues/check-user-can-be-assigned';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /****/
    public string $assignee;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $assignee)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->assignee = $assignee;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{assignee}'), array($this->owner, $this->repo, $this->assignee), '/repos/{owner}/{repo}/assignees/{assignee}?'));
    }
    function validateResponse()
    {
    }
}
