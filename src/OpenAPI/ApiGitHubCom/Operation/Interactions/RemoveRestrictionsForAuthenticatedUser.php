<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions;

final class RemoveRestrictionsForAuthenticatedUser
{
    public const OPERATION_ID = 'interactions/remove-restrictions-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/interaction-limits';
    private const METHOD = 'DELETE';
    private const PATH = '/user/interaction-limits';
    public function __construct()
    {
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array(), array(), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
