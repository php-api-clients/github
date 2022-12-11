<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos;

final class DeleteInvitation_
{
    private const OPERATION_ID = 'repos/delete-invitation';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the invitation.**/
    private readonly int $invitation_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $invitation_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->invitation_id = $invitation_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{invitation_id}'), array($this->owner, $this->repo, $this->invitation_id), '/repos/{owner}/{repo}/invitations/{invitation_id}'));
    }
    function validateResponse()
    {
    }
}
