<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class UpdateInvitation_
{
    private const OPERATION_ID = 'repos/update-invitation';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The unique identifier of the invitation.**/
    public int $invitation_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $invitation_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->invitation_id = $invitation_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{owner}', '{repo}', '{invitation_id}'), array($this->owner, $this->repo, $this->invitation_id), '/repos/{owner}/{repo}/invitations/{invitation_id}?'));
    }
    function validateResponse()
    {
    }
}
