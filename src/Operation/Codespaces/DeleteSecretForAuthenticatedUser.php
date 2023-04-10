<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Codespaces;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DeleteSecretForAuthenticatedUser
{
    public const OPERATION_ID = 'codespaces/delete-secret-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/codespaces/secrets/{secret_name}';
    private const METHOD = 'DELETE';
    private const PATH = '/user/codespaces/secrets/{secret_name}';
    /**The name of the secret.**/
    private string $secretName;
    public function __construct(string $secretName)
    {
        $this->secretName = $secretName;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{secret_name}'), array($this->secretName), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
