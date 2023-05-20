<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Reactions;

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

final class CreateForTeamDiscussionInOrg
{
    public const OPERATION_ID    = 'reactions/create-for-team-discussion-in-org';
    public const OPERATION_MATCH = 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**The number that identifies the discussion. **/
    private int $discussionNumber;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions $hydrator;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions $hydrator, string $org, string $teamSlug, int $discussionNumber)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->org                     = $org;
        $this->teamSlug                = $teamSlug;
        $this->discussionNumber        = $discussionNumber;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Reactions\CreateForTeamDiscussionInOrg\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}', '{discussion_number}'], [$this->org, $this->teamSlug, $this->discussionNumber], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\Reaction
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
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Reaction::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Reaction::class, $body);
                    /**
                     * Response
                     **/

                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Reaction::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Reaction::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
