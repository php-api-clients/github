<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues;

final class CheckUserCanBeAssigned_
{
    private const OPERATION_ID = 'issues/check-user-can-be-assigned';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    private readonly string $assignee;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $assignee)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->assignee = $assignee;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{assignee}'), array($this->owner, $this->repo, $this->assignee), '/repos/{owner}/{repo}/assignees/{assignee}'));
    }
    function validateResponse()
    {
    }
}
