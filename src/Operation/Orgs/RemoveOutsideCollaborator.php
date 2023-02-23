<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Orgs;

final class RemoveOutsideCollaborator
{
    public const OPERATION_ID = 'orgs/remove-outside-collaborator';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/outside_collaborators/{username}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/outside_collaborators/{username}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The handle for the GitHub user account.**/
    private string $username;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb $hydrator, string $org, string $username)
    {
        $this->org = $org;
        $this->username = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{username}'), array($this->org, $this->username), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson\H422
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson\H422
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Unprocessable Entity if user is a member of the organization**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson\H422::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
