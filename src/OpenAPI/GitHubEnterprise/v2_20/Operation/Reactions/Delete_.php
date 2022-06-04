<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions;

final class Delete_
{
    private const OPERATION_ID = 'reactions/delete';
    /**This API is under preview and subject to change.**/
    public string $accept;
    /****/
    public int $reaction_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $reaction_id)
    {
        $this->accept = $accept;
        $this->reaction_id = $reaction_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{reaction_id}'), array($this->reaction_id), '/reactions/{reaction_id}'));
    }
    function validateResponse()
    {
    }
}
