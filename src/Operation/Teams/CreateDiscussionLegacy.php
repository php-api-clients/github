<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class CreateDiscussionLegacy
{
    public const OPERATION_ID    = 'teams/create-discussion-legacy';
    public const OPERATION_MATCH = 'POST /teams/{team_id}/discussions';
    private const METHOD         = 'POST';
    private const PATH           = '/teams/{team_id}/discussions';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The unique identifier of the team. **/
    private int $teamId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Teams\TeamId\Discussions $hydrator;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrator\Operation\Teams\TeamId\Discussions $hydrator, int $teamId)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->teamId                  = $teamId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Teams\CreateDiscussionInOrg\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{team_id}'], [$this->teamId], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\TeamDiscussion
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TeamDiscussion::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\TeamDiscussion::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
