<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Teams\CbTeamIdRcb\Discussions;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamDiscussion;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;

use function json_decode;
use function str_replace;

final class ListDiscussionsLegacy
{
    public const OPERATION_ID    = 'teams/list-discussions-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/discussions';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}/discussions';
    /**The unique identifier of the team.**/
    private int $team_id;
    /**The direction to sort the results by.**/
    private string $direction;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Discussions $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Discussions $hydrator, int $team_id, string $direction = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->team_id                 = $team_id;
        $this->direction               = $direction;
        $this->per_page                = $per_page;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{direction}', '{per_page}', '{page}'], [$this->team_id, $this->direction, $this->per_page, $this->page], self::PATH . '?direction={direction}&per_page={per_page}&page={page}'));
    }

    /**
     * @return Observable<TeamDiscussion>
     */
    function createResponse(ResponseInterface $response): Observable
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(TeamDiscussion::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): TeamDiscussion {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\TeamDiscussion', $body);
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
