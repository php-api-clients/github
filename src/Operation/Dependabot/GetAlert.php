<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Dependabot;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetAlert
{
    public const OPERATION_ID = 'dependabot/get-alert';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/dependabot/alerts/{alert_number}';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/dependabot/alerts/{alert_number}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The number that identifies a Dependabot alert in its repository.
    You can find this at the end of the URL for a Dependabot alert within GitHub,
    or in `number` fields in the response from the
    `GET /repos/{owner}/{repo}/dependabot/alerts` operation.**/
    private int $alertNumber;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts\CbAlertNumberRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts\CbAlertNumberRcb $hydrator, string $owner, string $repo, int $alertNumber)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->alertNumber = $alertNumber;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{alert_number}'), array($this->owner, $this->repo, $this->alertNumber), self::PATH));
    }
    /**
     * @return Schema\DependabotAlert
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\DependabotAlert
    {
        $code = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                    **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\DependabotAlert::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\DependabotAlert::class, $body);
                    /**
                     * Forbidden
                    **/
                    case 403:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Resource not found
                    **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
