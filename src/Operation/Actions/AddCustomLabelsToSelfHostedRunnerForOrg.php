<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class AddCustomLabelsToSelfHostedRunnerForOrg
{
    public const OPERATION_ID = 'actions/add-custom-labels-to-self-hosted-runner-for-org';
    public const OPERATION_MATCH = 'POST /orgs/{org}/actions/runners/{runner_id}/labels';
    private const METHOD = 'POST';
    private const PATH = '/orgs/{org}/actions/runners/{runner_id}/labels';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Unique identifier of the self-hosted runner.**/
    private int $runner_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels $hydrator, string $org, int $runner_id)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->org = $org;
        $this->runner_id = $runner_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Actions\AddCustomLabelsToSelfHostedRunnerForOrg\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{runner_id}'), array($this->org, $this->runner_id), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson\H200
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson\H200::class, $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationErrorSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\ValidationErrorSimple::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
