<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

final class CreateWorkflowDispatch_
{
    private const OPERATION_ID = 'actions/create-workflow-dispatch';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The ID of the workflow. You can also pass the workflow file name as a string.**/
    private readonly $workflow_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, string $owner, string $repo, $workflow_id)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->workflow_id = $workflow_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C27483Ffb46246283985A378C8F0Eb254::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{workflow_id}'), array($this->owner, $this->repo, $this->workflow_id), '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches'), array('Content-Type' => 'application/json'), json_encode($data));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : 
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Response**/
            case 204:
                switch ($contentType) {
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}