<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Apps;

final class UnsuspendInstallation
{
    public const OPERATION_ID = 'apps/unsuspend-installation';
    public const OPERATION_MATCH = 'DELETE /app/installations/{installation_id}/suspended';
    private const METHOD = 'DELETE';
    private const PATH = '/app/installations/{installation_id}/suspended';
    /**The unique identifier of the installation.**/
    private int $installation_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\App\Installations\CbInstallationIdRcb\Suspended $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\App\Installations\CbInstallationIdRcb\Suspended $hydrator, int $installation_id)
    {
        $this->installation_id = $installation_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{installation_id}'), array($this->installation_id), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
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
