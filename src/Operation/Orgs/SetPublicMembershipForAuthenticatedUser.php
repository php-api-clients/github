<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Orgs;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class SetPublicMembershipForAuthenticatedUser
{
    public const OPERATION_ID = 'orgs/set-public-membership-for-authenticated-user';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/public_members/{username}';
    private const METHOD = 'PUT';
    private const PATH = '/orgs/{org}/public_members/{username}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The handle for the GitHub user account.**/
    private string $username;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\PublicMembers\CbUsernameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\PublicMembers\CbUsernameRcb $hydrator, string $org, string $username)
    {
        $this->org = $org;
        $this->username = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{username}'), array($this->org, $this->username), self::PATH));
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
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
