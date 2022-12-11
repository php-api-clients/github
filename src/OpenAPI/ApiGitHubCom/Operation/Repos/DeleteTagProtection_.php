<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class DeleteTagProtection_
{
    private const OPERATION_ID = 'repos/delete-tag-protection';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the tag protection.**/
    private readonly int $tag_protection_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $tag_protection_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->tag_protection_id = $tag_protection_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{tag_protection_id}'), array($this->owner, $this->repo, $this->tag_protection_id), '/repos/{owner}/{repo}/tags/protection/{tag_protection_id}'));
    }
    function validateResponse()
    {
    }
}
