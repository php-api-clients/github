<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetEnvironmentSecret
{
    public const OPERATION_ID = 'actions/get-environment-secret';
    public const OPERATION_MATCH = 'GET /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}';
    private const METHOD = 'GET';
    private const PATH = '/repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}';
    /**The unique identifier of the repository.**/
    private int $repositoryId;
    /**The name of the environment.**/
    private string $environmentName;
    /**The name of the secret.**/
    private string $secretName;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets\CbSecretNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets\CbSecretNameRcb $hydrator, int $repositoryId, string $environmentName, string $secretName)
    {
        $this->repositoryId = $repositoryId;
        $this->environmentName = $environmentName;
        $this->secretName = $secretName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{repository_id}', '{environment_name}', '{secret_name}'), array($this->repositoryId, $this->environmentName, $this->secretName), self::PATH));
    }
    /**
     * @return Schema\ActionsSecret
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\ActionsSecret
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ActionsSecret::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\ActionsSecret::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
