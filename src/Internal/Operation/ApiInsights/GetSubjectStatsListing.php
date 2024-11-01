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

final class GetSubjectStatsListing
{
    public const OPERATION_ID    = 'api-insights/get-subject-stats';
    public const OPERATION_MATCH = 'LIST /orgs/{org}/insights/api/subject-stats';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The minimum timestamp to query for stats **/
    private string $minTimestamp;
    /**The maximum timestamp to query for stats **/
    private string $maxTimestamp;
    /**The property to sort the results by. **/
    private array $sort;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The direction to sort the results by. **/
    private string $direction;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Insights\Api\SubjectStats $hydrator, string $org, string $minTimestamp, string $maxTimestamp, array $sort, int $page = 1, int $perPage = 30, string $direction = 'desc')
    {
        $this->org          = $org;
        $this->minTimestamp = $minTimestamp;
        $this->maxTimestamp = $maxTimestamp;
        $this->sort         = $sort;
        $this->page         = $page;
        $this->perPage      = $perPage;
        $this->direction    = $direction;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{min_timestamp}', '{max_timestamp}', '{sort}', '{page}', '{per_page}', '{direction}'], [$this->org, $this->minTimestamp, $this->maxTimestamp, $this->sort, $this->page, $this->perPage, $this->direction], '/orgs/{org}/insights/api/subject-stats' . '?min_timestamp={min_timestamp}&max_timestamp={max_timestamp}&sort={sort}&page={page}&per_page={per_page}&direction={direction}'));
    }

    /** @return Observable<Schema\ApiInsightsSubjectStats> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\ApiInsightsSubjectStats {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ApiInsightsSubjectStats::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\ApiInsightsSubjectStats::class, $body);
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
