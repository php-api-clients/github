<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Codespaces;

final class GetExportDetailsForAuthenticatedUser
{
    public const OPERATION_ID = 'codespaces/get-export-details-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/{codespace_name}/exports/{export_id}';
    private const METHOD = 'GET';
    private const PATH = '/user/codespaces/{codespace_name}/exports/{export_id}';
    /**The name of the codespace.**/
    private string $codespace_name;
    /**The ID of the export operation, or `latest`. Currently only `latest` is currently supported.**/
    private string $export_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports\CbExportIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports\CbExportIdRcb $hydrator, string $codespace_name, string $export_id)
    {
        $this->codespace_name = $codespace_name;
        $this->export_id = $export_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{codespace_name}', '{export_id}'), array($this->codespace_name, $this->export_id), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\CodespaceExportDetails|\ApiClients\Client\Github\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\CodespaceExportDetails|\ApiClients\Client\Github\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Resource not found**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\CodespaceExportDetails::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\CodespaceExportDetails', $body);
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
