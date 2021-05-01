<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Orgs;

final class ConvertMemberToOutsideCollaborator
{
    private const OPERATION_ID = 'orgs/convert-member-to-outside-collaborator';
    /****/
    public string $org;
    /****/
    public string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $username)
    {
        $this->org = $org;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}', '{username}'), array($this->org, $this->username), '/orgs/{org}/outside_collaborators/{username}?'));
    }
    function validateResponse()
    {
    }
}
