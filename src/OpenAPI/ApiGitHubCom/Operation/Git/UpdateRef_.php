<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git;

final class UpdateRef_
{
    private const OPERATION_ID = 'git/update-ref';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The name of the fully qualified reference to update. For example, `refs/heads/master`. If the value doesn't start with `refs` and have at least two slashes, it will be rejected.**/
    private readonly string $ref;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $ref)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ref = $ref;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{owner}', '{repo}', '{ref}'), array($this->owner, $this->repo, $this->ref), '/repos/{owner}/{repo}/git/refs/{ref}'));
    }
    function validateResponse()
    {
    }
}
