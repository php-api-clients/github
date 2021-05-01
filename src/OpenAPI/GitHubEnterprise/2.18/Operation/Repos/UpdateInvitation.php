<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Repos;

final class UpdateInvitation
{
    private const OPERATION_ID = 'repos/update-invitation';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**invitation_id parameter**/
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
