<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class ListRepoRequiredWorkflows
{
    public const OPERATION_ID = 'actions/list-repo-required-workflows';
    public const OPERATION_MATCH = 'GET /repos/{org}/{repo}/actions/required_workflows';
    private const METHOD = 'GET';
    private const PATH = '/repos/{org}/{repo}/actions/required_workflows';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows $hydrator, string $org, string $repo, int $perPage = 30, int $page = 1)
    {
        $this->org = $org;
        $this->repo = $repo;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{repo}', '{per_page}', '{page}'), array($this->org, $this->repo, $this->perPage, $this->page), self::PATH . '?per_page={per_page}&page={page}'));
    }
    /**
     * @return Schema\Operation\Actions\ListRepoRequiredWorkflows\Response\Applicationjson\H200
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Actions\ListRepoRequiredWorkflows\Response\Applicationjson\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Actions\ListRepoRequiredWorkflows\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Actions\ListRepoRequiredWorkflows\Response\Applicationjson\H200::class, $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
