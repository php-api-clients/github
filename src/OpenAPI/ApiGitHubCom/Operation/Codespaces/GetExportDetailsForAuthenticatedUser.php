<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports\CbExportIdRcb;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodespaceExportDetails;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class GetExportDetailsForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/get-export-details-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/{codespace_name}/exports/{export_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/user/codespaces/{codespace_name}/exports/{export_id}';
    /**The name of the codespace.**/
    private string $codespace_name;
    /**The ID of the export operation, or `latest`. Currently only `latest` is currently supported.**/
    private string $export_id;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly CbExportIdRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, CbExportIdRcb $hydrator, string $codespace_name, string $export_id)
    {
        $this->codespace_name          = $codespace_name;
        $this->export_id               = $export_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{codespace_name}', '{export_id}'], [$this->codespace_name, $this->export_id], self::PATH));
    }

    function createResponse(ResponseInterface $response): CodespaceExportDetails|BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Resource not found**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(CodespaceExportDetails::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\CodespaceExportDetails', $body);
                }

                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
