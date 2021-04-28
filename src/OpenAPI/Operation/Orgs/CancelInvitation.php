<?php

namespace ApiClients\Client\Github\OpenAPI\Operation\Orgs;

final class CancelInvitation
{
    private const OPERATION_ID = 'orgs/cancel-invitation';
    /****/
    public string $org;
    /**invitation_id parameter**/
    public int $invitation_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $invitation_id)
    {
        $this->org = $org;
        $this->invitation_id = $invitation_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{invitation_id}'), array($this->org, $this->invitation_id), '/orgs/{org}/invitations/{invitation_id}?'));
    }
    function validateResponse()
    {
    }
}
