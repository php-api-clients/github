<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\SecretScanning;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
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

final class ListLocationsForAlertListing
{
    public const OPERATION_ID    = 'secret-scanning/list-locations-for-alert';
    public const OPERATION_MATCH = 'LIST /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The number that identifies an alert. You can find this at the end of the URL for a code scanning alert within GitHub, and in the `number` field in the response from the `GET /repos/{owner}/{repo}/code-scanning/alerts` operation. **/
    private int $alertNumber;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations $hydrator, string $owner, string $repo, int $alertNumber, int $page = 1, int $perPage = 30)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->alertNumber = $alertNumber;
        $this->page        = $page;
        $this->perPage     = $perPage;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{alert_number}', '{page}', '{per_page}'], [$this->owner, $this->repo, $this->alertNumber, $this->page, $this->perPage], '/repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations' . '?page={page}&per_page={per_page}'));
    }

    /** @return Observable<Schema\SecretScanningLocation>|WithoutBody */
    public function createResponse(ResponseInterface $response): Observable|WithoutBody
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\SecretScanningLocation {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\SecretScanningLocation::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\SecretScanningLocation::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Service unavailable
                     **/

                    case 503:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable(503, $this->hydrator->hydrateObject(Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Repository is public, or secret scanning is disabled for the repository, or the resource is not found
             **/
            case 404:
                return new WithoutBody(404, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
