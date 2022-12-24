<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

final class GetDownloadStatusForPreReceiveEnvironment_
{
    private const OPERATION_ID = 'enterprise-admin/get-download-status-for-pre-receive-environment';
    public const OPERATION_MATCH = 'GET /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The unique identifier of the pre-receive environment.**/
    private readonly int $pre_receive_environment_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, int $pre_receive_environment_id)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->pre_receive_environment_id = $pre_receive_environment_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{pre_receive_environment_id}'), array($this->pre_receive_environment_id), '/admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest'));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveEnvironmentDownloadStatus
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PreReceiveEnvironmentDownloadStatus::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\GitHubEnterprise\\v3_1\\Schema\\PreReceiveEnvironmentDownloadStatus', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}