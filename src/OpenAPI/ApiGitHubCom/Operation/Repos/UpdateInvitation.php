<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Invitations\CbInvitationIdRcb;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repos\UpdateInvitation\Request\Applicationjson;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RepositoryInvitation;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function json_encode;
use function str_replace;

final class UpdateInvitation
{
    public const OPERATION_ID    = 'repos/update-invitation';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/invitations/{invitation_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repos/{owner}/{repo}/invitations/{invitation_id}';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the invitation.**/
    private int $invitation_id;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly CbInvitationIdRcb $hydrator;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, CbInvitationIdRcb $hydrator, string $owner, string $repo, int $invitation_id)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->invitation_id           = $invitation_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Applicationjson::SCHEMA_JSON, Schema::class));

        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{invitation_id}'], [$this->owner, $this->repo, $this->invitation_id], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    function createResponse(ResponseInterface $response): RepositoryInvitation
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(RepositoryInvitation::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\RepositoryInvitation', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
