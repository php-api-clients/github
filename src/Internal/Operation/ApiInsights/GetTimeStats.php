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
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class GetTimeStats
{
    public const OPERATION_ID    = 'api-insights/get-time-stats';
    public const OPERATION_MATCH = 'GET /orgs/{org}/insights/api/time-stats';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The minimum timestamp to query for stats **/
    private string $minTimestamp;
    /**The maximum timestamp to query for stats **/
    private string $maxTimestamp;
    /**The increment of time used to breakdown the query results (5m, 10m, 1h, etc.) **/
    private string $timestampIncrement;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Insights\Api\TimeStats $hydrator, string $org, string $minTimestamp, string $maxTimestamp, string $timestampIncrement)
    {
        $this->org                = $org;
        $this->minTimestamp       = $minTimestamp;
        $this->maxTimestamp       = $maxTimestamp;
        $this->timestampIncrement = $timestampIncrement;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{min_timestamp}', '{max_timestamp}', '{timestamp_increment}'], [$this->org, $this->minTimestamp, $this->maxTimestamp, $this->timestampIncrement], '/orgs/{org}/insights/api/time-stats' . '?min_timestamp={min_timestamp}&max_timestamp={max_timestamp}&timestamp_increment={timestamp_increment}'));
    }

    /** @return Observable<Schema\ApiInsightsTimeStats> */
    public function createResponse(ResponseInterface $response): Observable
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\ApiInsightsTimeStats {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ApiInsightsTimeStats::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\ApiInsightsTimeStats::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
