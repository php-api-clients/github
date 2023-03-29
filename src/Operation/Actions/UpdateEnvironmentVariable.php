<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class UpdateEnvironmentVariable
{
    public const OPERATION_ID = 'actions/update-environment-variable';
    public const OPERATION_MATCH = 'PATCH /repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    private const METHOD = 'PATCH';
    private const PATH = '/repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The unique identifier of the repository.**/
    private int $repositoryId;
    /**The name of the variable.**/
    private string $name;
    /**The name of the environment.**/
    private string $environmentName;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, int $repositoryId, string $name, string $environmentName)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->repositoryId = $repositoryId;
        $this->name = $name;
        $this->environmentName = $environmentName;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Actions\UpdateEnvironmentVariable\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{repository_id}', '{name}', '{environment_name}'), array($this->repositoryId, $this->name, $this->environmentName), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
