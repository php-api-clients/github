<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DeleteEnvironmentSecret
{
    public const OPERATION_ID = 'actions/delete-environment-secret';
    public const OPERATION_MATCH = 'DELETE /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}';
    private const METHOD = 'DELETE';
    private const PATH = '/repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}';
    /**The unique identifier of the repository.**/
    private int $repositoryId;
    /**The name of the environment.**/
    private string $environmentName;
    /**The name of the secret.**/
    private string $secretName;
    public function __construct(int $repositoryId, string $environmentName, string $secretName)
    {
        $this->repositoryId = $repositoryId;
        $this->environmentName = $environmentName;
        $this->secretName = $secretName;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{repository_id}', '{environment_name}', '{secret_name}'), array($this->repositoryId, $this->environmentName, $this->secretName), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
