<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class ListInvitationTeams
{
    private const OPERATION_ID = 'orgs/list-invitation-teams';
    /****/
    public string $org;
    /**invitation_id parameter**/
    public int $invitation_id;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $invitation_id, int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->invitation_id = $invitation_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}', '{invitation_id}', '{per_page}', '{page}'), array($this->org, $this->invitation_id, $this->per_page, $this->page), '/orgs/{org}/invitations/{invitation_id}/teams?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
