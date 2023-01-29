<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class AddSelectedRepoToOrgVariable
{
    private const OPERATION_ID = 'actions/add-selected-repo-to-org-variable';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/variables/{name}/repositories/{repository_id}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the variable.**/
    private string $name;
    private int $repository_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator, string $org, string $name, int $repository_id)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->org = $org;
        $this->name = $name;
        $this->repository_id = $repository_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('PUT', \str_replace(array('{org}', '{name}', '{repository_id}'), array($this->org, $this->name, $this->repository_id), '/orgs/{org}/actions/variables/{name}/repositories/{repository_id}'));
    }
    /**
     * @return int
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : int
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 204:
                return 204;
                break;
            /**Response when the visibility of the variable is not set to `selected`**/
            case 409:
                return 409;
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
