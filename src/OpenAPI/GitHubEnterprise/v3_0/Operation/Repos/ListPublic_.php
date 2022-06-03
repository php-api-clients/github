<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos;

final class ListPublic_
{
    private const OPERATION_ID = 'repos/list-public';
    /**A repository ID. Only return repositories with an ID greater than this ID.**/
    public int $since;
    /**Specifies the types of repositories to return. Can be one of `all` or `public`. Default: `public`. Note: For GitHub Enterprise Server and GitHub AE, this endpoint will only list repositories available to all users on the enterprise.**/
    public string $visibility;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($since, string $visibility = 'public')
    {
        $this->since = $since;
        $this->visibility = $visibility;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{since}', '{visibility}'), array($this->since, $this->visibility), '/repositories?since={since}&visibility={visibility}'));
    }
    function validateResponse()
    {
    }
}
