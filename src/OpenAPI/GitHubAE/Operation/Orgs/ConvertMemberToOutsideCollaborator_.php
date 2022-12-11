<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs;

final class ConvertMemberToOutsideCollaborator_
{
    private const OPERATION_ID = 'orgs/convert-member-to-outside-collaborator';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The handle for the GitHub user account.**/
    private readonly string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $username)
    {
        $this->org = $org;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}', '{username}'), array($this->org, $this->username), '/orgs/{org}/outside_collaborators/{username}'));
    }
    function validateResponse()
    {
    }
}
