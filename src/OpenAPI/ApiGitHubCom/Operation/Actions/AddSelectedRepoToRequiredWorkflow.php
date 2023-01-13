<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class AddSelectedRepoToRequiredWorkflow
{
    private const OPERATION_ID = 'actions/add-selected-repo-to-required-workflow';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories/{repository_id}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The unique identifier of the required workflow.**/
    private readonly int $required_workflow_id;
    /**The unique identifier of the repository.**/
    private readonly int $repository_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, string $org, int $required_workflow_id, int $repository_id)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->org = $org;
        $this->required_workflow_id = $required_workflow_id;
        $this->repository_id = $repository_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('PUT', \str_replace(array('{org}', '{required_workflow_id}', '{repository_id}'), array($this->org, $this->required_workflow_id, $this->repository_id), '/orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories/{repository_id}'));
    }
    /**
     * @return int
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : int
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Success**/
            case 204:
                return 204;
                break;
            /**Resource Not Found**/
            case 404:
                return 404;
                break;
            /**Validation Error**/
            case 422:
                return 422;
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
