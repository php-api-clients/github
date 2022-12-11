<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta;

final class GetOctocat_
{
    private const OPERATION_ID = 'meta/get-octocat';
    /**The words to show in Octocat's speech bubble**/
    private readonly string $s;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $s)
    {
        $this->s = $s;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{s}'), array($this->s), '/octocat?s={s}'));
    }
    function validateResponse()
    {
    }
}
