<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

final class RemoveCustomLabelFromSelfHostedRunnerForOrg
{
    public const OPERATION_ID = 'actions/remove-custom-label-from-self-hosted-runner-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/runners/{runner_id}/labels/{name}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/actions/runners/{runner_id}/labels/{name}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Unique identifier of the self-hosted runner.**/
    private int $runner_id;
    /**The name of a self-hosted runner's custom label.**/
    private string $name;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb $hydrator, string $org, int $runner_id, string $name)
    {
        $this->org = $org;
        $this->runner_id = $runner_id;
        $this->name = $name;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{runner_id}', '{name}'), array($this->org, $this->runner_id, $this->name), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson\H200|\ApiClients\Client\Github\Schema\BasicError|\ApiClients\Client\Github\Schema\ValidationErrorSimple
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson\H200|\ApiClients\Client\Github\Schema\BasicError|\ApiClients\Client\Github\Schema\ValidationErrorSimple
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Validation failed, or the endpoint has been spammed.**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListLabelsForSelfHostedRunnerForOrg\\Response\\Applicationjson\\H200', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\ValidationErrorSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\ValidationErrorSimple', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
