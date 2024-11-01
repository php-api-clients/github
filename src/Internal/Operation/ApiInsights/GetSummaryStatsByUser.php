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

final class GetSummaryStatsByUser
{
    public const OPERATION_ID    = 'api-insights/get-summary-stats-by-user';
    public const OPERATION_MATCH = 'GET /orgs/{org}/insights/api/summary-stats/users/{user_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The ID of the user to query for stats **/
    private string $userId;
    /**The minimum timestamp to query for stats **/
    private string $minTimestamp;
    /**The maximum timestamp to query for stats **/
    private string $maxTimestamp;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Insights\Api\SummaryStats\Users\UserId $hydrator, string $org, string $userId, string $minTimestamp, string $maxTimestamp)
    {
        $this->org          = $org;
        $this->userId       = $userId;
        $this->minTimestamp = $minTimestamp;
        $this->maxTimestamp = $maxTimestamp;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{user_id}', '{min_timestamp}', '{max_timestamp}'], [$this->org, $this->userId, $this->minTimestamp, $this->maxTimestamp], '/orgs/{org}/insights/api/summary-stats/users/{user_id}' . '?min_timestamp={min_timestamp}&max_timestamp={max_timestamp}'));
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
