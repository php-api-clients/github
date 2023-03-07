<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class DeleteEnvironmentVariable
{
    public const OPERATION_ID = 'actions/delete-environment-variable';
    public const OPERATION_MATCH = 'DELETE /repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    private const METHOD = 'DELETE';
    private const PATH = '/repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    /**The unique identifier of the repository.**/
    private int $repository_id;
    /**The name of the variable.**/
    private string $name;
    /**The name of the environment.**/
    private string $environment_name;
    public function __construct(int $repository_id, string $name, string $environment_name)
    {
        $this->repository_id = $repository_id;
        $this->name = $name;
        $this->environment_name = $environment_name;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{repository_id}', '{name}', '{environment_name}'), array($this->repository_id, $this->name, $this->environment_name), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
