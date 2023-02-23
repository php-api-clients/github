<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Users;

final class GetContextForUser
{
    public const OPERATION_ID = 'users/get-context-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/hovercard';
    private const METHOD = 'GET';
    private const PATH = '/users/{username}/hovercard';
    /**The handle for the GitHub user account.**/
    private string $username;
    /**Identifies which additional information you'd like to receive about the person's hovercard. Can be `organization`, `repository`, `issue`, `pull_request`. **Required** when using `subject_id`.**/
    private string $subject_type;
    /**Uses the ID for the `subject_type` you specified. **Required** when using `subject_type`.**/
    private string $subject_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Hovercard $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Hovercard $hydrator, string $username, string $subject_type, string $subject_id)
    {
        $this->username = $username;
        $this->subject_type = $subject_type;
        $this->subject_id = $subject_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{username}', '{subject_type}', '{subject_id}'), array($this->username, $this->subject_type, $this->subject_id), self::PATH . '?subject_type={subject_type}&subject_id={subject_id}'));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\Hovercard|\ApiClients\Client\Github\Schema\BasicError|\ApiClients\Client\Github\Schema\ValidationError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Hovercard|\ApiClients\Client\Github\Schema\BasicError|\ApiClients\Client\Github\Schema\ValidationError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Validation failed, or the endpoint has been spammed.**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Hovercard::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Hovercard', $body);
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
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\ValidationError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
