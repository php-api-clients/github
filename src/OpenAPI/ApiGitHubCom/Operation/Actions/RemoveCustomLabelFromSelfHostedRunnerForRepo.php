<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class RemoveCustomLabelFromSelfHostedRunnerForRepo
{
    private const OPERATION_ID = 'actions/remove-custom-label-from-self-hosted-runner-for-repo';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}/labels/{name}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**Unique identifier of the self-hosted runner.**/
    private readonly int $runner_id;
    /**The name of a self-hosted runner's custom label.**/
    private readonly string $name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, string $owner, string $repo, int $runner_id, string $name)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->runner_id = $runner_id;
        $this->name = $name;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{runner_id}', '{name}'), array($this->owner, $this->repo, $this->runner_id, $this->name), '/repos/{owner}/{repo}/actions/runners/{runner_id}/labels/{name}'));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RemoveCustomLabelFromSelfHostedRunnerForRepo\Response\Application\Json\H200|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RemoveCustomLabelFromSelfHostedRunnerForRepo\Response\Application\Json\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\RemoveCustomLabelFromSelfHostedRunnerForRepo\\Response\\Application\\Json\\H200', $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationErrorSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ValidationErrorSimple', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
