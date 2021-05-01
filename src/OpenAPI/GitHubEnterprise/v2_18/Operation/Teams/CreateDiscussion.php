<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams;

final class CreateDiscussion
{
    private const OPERATION_ID = 'teams/create-discussion';
    /**This API is under preview and subject to change.**/
    public string $accept;
    /****/
    public int $team_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $accept = 'application/vnd.github.echo-preview+json', $team_id)
    {
        $this->accept = $accept;
        $this->team_id = $team_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{team_id}'), array($this->team_id), '/teams/{team_id}/discussions?'));
    }
    function validateResponse()
    {
    }
}
