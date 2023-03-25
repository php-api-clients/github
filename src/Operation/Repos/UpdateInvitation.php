<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class UpdateInvitation
{
    public const OPERATION_ID = 'repos/update-invitation';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/invitations/{invitation_id}';
    private const METHOD = 'PATCH';
    private const PATH = '/repos/{owner}/{repo}/invitations/{invitation_id}';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the invitation.**/
    private int $invitationId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Invitations\CbInvitationIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Invitations\CbInvitationIdRcb $hydrator, string $owner, string $repo, int $invitationId)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->invitationId = $invitationId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        $this->requestSchemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(Schema\Repos\UpdateInvitation\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{invitation_id}'), array($this->owner, $this->repo, $this->invitationId), self::PATH), array('Content-Type' => 'application/json'), json_encode($data));
    }
    /**
     * @return Schema\RepositoryInvitation
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\RepositoryInvitation
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\RepositoryInvitation::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\RepositoryInvitation::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
