<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListEnvironmentVariables
{
    public const OPERATION_ID = 'actions/list-environment-variables';
    public const OPERATION_MATCH = 'GET /repositories/{repository_id}/environments/{environment_name}/variables';
    private const METHOD = 'GET';
    private const PATH = '/repositories/{repository_id}/environments/{environment_name}/variables';
    /**The unique identifier of the repository.**/
    private int $repositoryId;
    /**The name of the environment.**/
    private string $environmentName;
    /**The number of results per page (max 30).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Variables $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Variables $hydrator, int $repositoryId, string $environmentName, int $perPage = 10, int $page = 1)
    {
        $this->repositoryId = $repositoryId;
        $this->environmentName = $environmentName;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{repository_id}', '{environment_name}', '{per_page}', '{page}'), array($this->repositoryId, $this->environmentName, $this->perPage, $this->page), self::PATH . '?perPage={per_page}&page={page}'));
    }
    /**
     * @return Schema\Operation\Actions\ListRepoOrganizationVariables\Response\Applicationjson\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Actions\ListRepoOrganizationVariables\Response\Applicationjson\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Actions\ListRepoOrganizationVariables\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Actions\ListRepoOrganizationVariables\Response\Applicationjson\H200::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
