<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

final class CreateWorkflowDispatch
{
    public const OPERATION_ID = 'actions/create-workflow-dispatch';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches';
    private const METHOD = 'POST';
    private const PATH = '/repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The ID of the workflow. You can also pass the workflow file name as a string.**/
    private $workflow_id;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, string $owner, string $repo, $workflow_id)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->workflow_id = $workflow_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Actions\CreateWorkflowDispatch\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{workflow_id}'), array($this->owner, $this->repo, $this->workflow_id), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
