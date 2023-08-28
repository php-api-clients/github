<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Teams;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class CheckPermissionsForProjectInOrg
{
    public const OPERATION_ID    = 'teams/check-permissions-for-project-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/projects/{project_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/projects/{project_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**The unique identifier of the project. **/
    private int $projectId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId $hydrator, string $org, string $teamSlug, int $projectId)
    {
        $this->org       = $org;
        $this->teamSlug  = $teamSlug;
        $this->projectId = $projectId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}', '{project_id}'], [$this->org, $this->teamSlug, $this->projectId], self::PATH));
    }

    /** @return Schema\TeamProject|array{code: int} */
    public function createResponse(ResponseInterface $response): Schema\TeamProject|array
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TeamProject::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\TeamProject::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Not Found if project is not managed by this team
             **/
            case 404:
                return ['code' => 404];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
