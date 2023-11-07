<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\SecurityAdvisories;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
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

final class ListGlobalAdvisories
{
    public const OPERATION_ID    = 'security-advisories/list-global-advisories';
    public const OPERATION_MATCH = 'GET /advisories';
    /**If specified, only advisories with this GHSA (GitHub Security Advisory) identifier will be returned. **/
    private string $ghsaId;
    /**If specified, only advisories with this CVE (Common Vulnerabilities and Exposures) identifier will be returned. **/
    private string $cveId;
    /**If specified, only advisories for these ecosystems will be returned. **/
    private string $ecosystem;
    /**If specified, only advisories with these severities will be returned. **/
    private string $severity;
    /**If specified, only advisories with these Common Weakness Enumerations (CWEs) will be returned.

    Example: `cwes=79,284,22` or `cwes[]=79&cwes[]=284&cwes[]=22` **/
    private $cwes;
    /**Whether to only return advisories that have been withdrawn. **/
    private bool $isWithdrawn;
    /**If specified, only return advisories that affect any of `package` or `package@version`. A maximum of 1000 packages can be specified.
    If the query parameter causes the URL to exceed the maximum URL length supported by your client, you must specify fewer packages.

    Example: `affects=package1,package2@1.0.0,package3@^2.0.0` or `affects[]=package1&affects[]=package2@1.0.0` **/
    private $affects;
    /**If specified, only return advisories that were published on a date or date range.

    For more information on the syntax of the date range, see "[Understanding the search syntax](https://docs.github.com/search-github/getting-started-with-searching-on-github/understanding-the-search-syntax#query-for-dates)." **/
    private string $published;
    /**If specified, only return advisories that were updated on a date or date range.

    For more information on the syntax of the date range, see "[Understanding the search syntax](https://docs.github.com/search-github/getting-started-with-searching-on-github/understanding-the-search-syntax#query-for-dates)." **/
    private string $updated;
    /**If specified, only show advisories that were updated or published on a date or date range.

    For more information on the syntax of the date range, see "[Understanding the search syntax](https://docs.github.com/search-github/getting-started-with-searching-on-github/understanding-the-search-syntax#query-for-dates)." **/
    private string $modified;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results before this cursor. **/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results after this cursor. **/
    private string $after;
    /**If specified, only advisories of this type will be returned. By default, a request with no other parameters defined will only return reviewed advisories that are not malware. **/
    private string $type;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**The property to sort the results by. **/
    private string $sort;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Advisories $hydrator, string $ghsaId, string $cveId, string $ecosystem, string $severity, $cwes, bool $isWithdrawn, $affects, string $published, string $updated, string $modified, string $before, string $after, string $type = 'reviewed', string $direction = 'desc', int $perPage = 30, string $sort = 'published')
    {
        $this->ghsaId      = $ghsaId;
        $this->cveId       = $cveId;
        $this->ecosystem   = $ecosystem;
        $this->severity    = $severity;
        $this->cwes        = $cwes;
        $this->isWithdrawn = $isWithdrawn;
        $this->affects     = $affects;
        $this->published   = $published;
        $this->updated     = $updated;
        $this->modified    = $modified;
        $this->before      = $before;
        $this->after       = $after;
        $this->type        = $type;
        $this->direction   = $direction;
        $this->perPage     = $perPage;
        $this->sort        = $sort;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{ghsa_id}', '{cve_id}', '{ecosystem}', '{severity}', '{cwes}', '{is_withdrawn}', '{affects}', '{published}', '{updated}', '{modified}', '{before}', '{after}', '{type}', '{direction}', '{per_page}', '{sort}'], [$this->ghsaId, $this->cveId, $this->ecosystem, $this->severity, $this->cwes, $this->isWithdrawn, $this->affects, $this->published, $this->updated, $this->modified, $this->before, $this->after, $this->type, $this->direction, $this->perPage, $this->sort], '/advisories' . '?ghsa_id={ghsa_id}&cve_id={cve_id}&ecosystem={ecosystem}&severity={severity}&cwes={cwes}&is_withdrawn={is_withdrawn}&affects={affects}&published={published}&updated={updated}&modified={modified}&before={before}&after={after}&type={type}&direction={direction}&per_page={per_page}&sort={sort}'));
    }

    /** @return Observable<Schema\GlobalAdvisory> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\GlobalAdvisory {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\GlobalAdvisory::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\GlobalAdvisory::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Too many requests
                     **/

                    case 429:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(429, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Validation failed, or the endpoint has been spammed.
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationErrorSimple::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ValidationErrorSimple(422, $this->hydrator->hydrateObject(Schema\ValidationErrorSimple::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
