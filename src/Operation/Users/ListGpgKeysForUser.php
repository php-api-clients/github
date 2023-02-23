<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Users;

final class ListGpgKeysForUser
{
    public const OPERATION_ID = 'users/list-gpg-keys-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/gpg_keys';
    private const METHOD = 'GET';
    private const PATH = '/users/{username}/gpg_keys';
    /**The handle for the GitHub user account.**/
    private string $username;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\GpgKeys $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\GpgKeys $hydrator, string $username, int $per_page = 30, int $page = 1)
    {
        $this->username = $username;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{username}', '{per_page}', '{page}'), array($this->username, $this->per_page, $this->page), self::PATH . '?per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\Schema\GpgKey>
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
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\GpgKey::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\Schema\GpgKey {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\GpgKey', $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
