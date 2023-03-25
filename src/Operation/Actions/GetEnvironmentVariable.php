<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetEnvironmentVariable
{
    public const OPERATION_ID = 'actions/get-environment-variable';
    public const OPERATION_MATCH = 'GET /repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    private const METHOD = 'GET';
    private const PATH = '/repositories/{repository_id}/environments/{environment_name}/variables/{name}';
    /**The unique identifier of the repository.**/
    private int $repositoryId;
    /**The name of the environment.**/
    private string $environmentName;
    /**The name of the variable.**/
    private string $name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Variables\CbNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Variables\CbNameRcb $hydrator, int $repositoryId, string $environmentName, string $name)
    {
        $this->repositoryId = $repositoryId;
        $this->environmentName = $environmentName;
        $this->name = $name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{repository_id}', '{environment_name}', '{name}'), array($this->repositoryId, $this->environmentName, $this->name), self::PATH));
    }
    /**
     * @return Schema\ActionsVariable
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\ActionsVariable
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ActionsVariable::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\ActionsVariable::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
