<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Codespaces;

final class DeleteSecretForAuthenticatedUser
{
    public const OPERATION_ID = 'codespaces/delete-secret-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/codespaces/secrets/{secret_name}';
    private const METHOD = 'DELETE';
    private const PATH = '/user/codespaces/secrets/{secret_name}';
    /**The name of the secret.**/
    private string $secret_name;
    public function __construct(string $secret_name)
    {
        $this->secret_name = $secret_name;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{secret_name}'), array($this->secret_name), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
