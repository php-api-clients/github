<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Users;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListPublicEmailsForAuthenticatedUser
{
    public const OPERATION_ID = 'users/list-public-emails-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/public_emails';
    private const METHOD = 'GET';
    private const PATH = '/user/public_emails';
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\User\PublicEmails $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\User\PublicEmails $hydrator, int $per_page = 30, int $page = 1)
    {
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{per_page}', '{page}'), array($this->per_page, $this->page), self::PATH . '?per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<Schema\Email>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Email::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\Email {
                            return $this->hydrator->hydrateObject(Schema\Email::class, $body);
                        });
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
            /**Forbidden**/
            case 403:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
            /**Requires authentication**/
            case 401:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw $this->hydrator->hydrateObject(ErrorSchemas\BasicError::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
