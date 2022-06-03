<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class AcceptInvitationForAuthenticatedUser_
{
    private const OPERATION_ID = 'repos/accept-invitation-for-authenticated-user';
    /**The unique identifier of the invitation.**/
    public int $invitation_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($invitation_id)
    {
        $this->invitation_id = $invitation_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{invitation_id}'), array($this->invitation_id), '/user/repository_invitations/{invitation_id}?'));
    }
    function validateResponse()
    {
    }
}
