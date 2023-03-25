<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListLabelsForSelfHostedRunnerForOrg
{
    public const OPERATION_ID = 'actions/list-labels-for-self-hosted-runner-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/runners/{runner_id}/labels';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/actions/runners/{runner_id}/labels';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Unique identifier of the self-hosted runner.**/
    private int $runnerId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels $hydrator, string $org, int $runnerId)
    {
        $this->org = $org;
        $this->runnerId = $runnerId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{runner_id}'), array($this->org, $this->runnerId), self::PATH));
    }
    /**
     * @return Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson\H200
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson\H200
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
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
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
