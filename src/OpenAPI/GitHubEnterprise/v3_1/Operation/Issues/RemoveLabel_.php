<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues;

final class RemoveLabel_
{
    private const OPERATION_ID = 'issues/remove-label';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The number that identifies the issue.**/
    private readonly int $issue_number;
    private readonly string $name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $issue_number, string $name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issue_number;
        $this->name = $name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{issue_number}', '{name}'), array($this->owner, $this->repo, $this->issue_number, $this->name), '/repos/{owner}/{repo}/issues/{issue_number}/labels/{name}'));
    }
    function validateResponse()
    {
    }
}
