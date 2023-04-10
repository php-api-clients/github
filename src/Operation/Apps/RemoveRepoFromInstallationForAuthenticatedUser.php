<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Apps;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class RemoveRepoFromInstallationForAuthenticatedUser
{
    public const OPERATION_ID = 'apps/remove-repo-from-installation-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/installations/{installation_id}/repositories/{repository_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/user/installations/{installation_id}/repositories/{repository_id}';
    /**The unique identifier of the installation.**/
    private int $installationId;
    /**The unique identifier of the repository.**/
    private int $repositoryId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories\CbRepositoryIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories\CbRepositoryIdRcb $hydrator, int $installationId, int $repositoryId)
    {
        $this->installationId = $installationId;
        $this->repositoryId = $repositoryId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{installation_id}', '{repository_id}'), array($this->installationId, $this->repositoryId), self::PATH));
    }
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : mixed
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Forbidden**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
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
