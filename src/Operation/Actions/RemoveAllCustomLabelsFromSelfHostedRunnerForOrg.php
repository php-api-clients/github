<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

final class RemoveAllCustomLabelsFromSelfHostedRunnerForOrg
{
    public const OPERATION_ID = 'actions/remove-all-custom-labels-from-self-hosted-runner-for-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/runners/{runner_id}/labels';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/actions/runners/{runner_id}/labels';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Unique identifier of the self-hosted runner.**/
    private int $runner_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels $hydrator, string $org, int $runner_id)
    {
        $this->org = $org;
        $this->runner_id = $runner_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{runner_id}'), array($this->org, $this->runner_id), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson\H200|\ApiClients\Client\Github\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson\H200|\ApiClients\Client\Github\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Resource not found**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListLabelsForSelfHostedRunnerForOrg\\Response\\Applicationjson\\H200', $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
