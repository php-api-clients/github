<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class CancelInvitation_
{
    private const OPERATION_ID = 'orgs/cancel-invitation';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The unique identifier of the invitation.**/
    private readonly int $invitation_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, int $invitation_id)
    {
        $this->org = $org;
        $this->invitation_id = $invitation_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{invitation_id}'), array($this->org, $this->invitation_id), '/orgs/{org}/invitations/{invitation_id}'));
    }
    function validateResponse()
    {
    }
}
