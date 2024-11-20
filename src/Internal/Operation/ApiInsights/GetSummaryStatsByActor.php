<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\ApiInsights;

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

final class GetSummaryStatsByActor
{
    public const OPERATION_ID    = 'api-insights/get-summary-stats-by-actor';
    public const OPERATION_MATCH = 'GET /orgs/{org}/insights/api/summary-stats/{actor_type}/{actor_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The minimum timestamp to query for stats. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $minTimestamp;
    /**The maximum timestamp to query for stats. Defaults to the time 30 days ago. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $maxTimestamp;
    /**The type of the actor **/
    private string $actorType;
    /**The ID of the actor **/
    private int $actorId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Insights\Api\SummaryStats\ActorType\ActorId $hydrator, string $org, string $minTimestamp, string $maxTimestamp, string $actorType, int $actorId)
    {
        $this->org          = $org;
        $this->minTimestamp = $minTimestamp;
        $this->maxTimestamp = $maxTimestamp;
        $this->actorType    = $actorType;
        $this->actorId      = $actorId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{min_timestamp}', '{max_timestamp}', '{actor_type}', '{actor_id}'], [$this->org, $this->minTimestamp, $this->maxTimestamp, $this->actorType, $this->actorId], '/orgs/{org}/insights/api/summary-stats/{actor_type}/{actor_id}' . '?min_timestamp={min_timestamp}&max_timestamp={max_timestamp}'));
    }

    public function createResponse(ResponseInterface $response): Schema\ApiInsightsSummaryStats
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ApiInsightsSummaryStats::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\ApiInsightsSummaryStats::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
