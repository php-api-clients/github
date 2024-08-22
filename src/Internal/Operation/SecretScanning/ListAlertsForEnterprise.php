<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\SecretScanning;

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

final class ListAlertsForEnterprise
{
    public const OPERATION_ID    = 'secret-scanning/list-alerts-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/secret-scanning/alerts';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**Set to `open` or `resolved` to only list secret scanning alerts in a specific state. **/
    private string $state;
    /**A comma-separated list of secret types to return. By default all secret types are returned.
    See "[Supported secret scanning patterns](https://docs.github.com/code-security/secret-scanning/introduction/supported-secret-scanning-patterns#supported-secrets)"
    for a complete list of secret types. **/
    private string $secretType;
    /**A comma-separated list of resolutions. Only secret scanning alerts with one of these resolutions are listed. Valid resolutions are `false_positive`, `wont_fix`, `revoked`, `pattern_edited`, `pattern_deleted` or `used_in_tests`. **/
    private string $resolution;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results before this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results after this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $after;
    /**A comma-separated list of validities that, when present, will return alerts that match the validities in this list. Valid options are `active`, `inactive`, and `unknown`. **/
    private string $validity;
    /**The property to sort the results by. `created` means when the alert was created. `updated` means when the alert was updated or resolved. **/
    private string $sort;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprises\Enterprise\SecretScanning\Alerts $hydrator, string $enterprise, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort = 'created', string $direction = 'desc', int $perPage = 30)
    {
        $this->enterprise = $enterprise;
        $this->state      = $state;
        $this->secretType = $secretType;
        $this->resolution = $resolution;
        $this->before     = $before;
        $this->after      = $after;
        $this->validity   = $validity;
        $this->sort       = $sort;
        $this->direction  = $direction;
        $this->perPage    = $perPage;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{enterprise}', '{state}', '{secret_type}', '{resolution}', '{before}', '{after}', '{validity}', '{sort}', '{direction}', '{per_page}'], [$this->enterprise, $this->state, $this->secretType, $this->resolution, $this->before, $this->after, $this->validity, $this->sort, $this->direction, $this->perPage], '/enterprises/{enterprise}/secret-scanning/alerts' . '?state={state}&secret_type={secret_type}&resolution={resolution}&before={before}&after={after}&validity={validity}&sort={sort}&direction={direction}&per_page={per_page}'));
    }

    /** @return Observable<Schema\OrganizationSecretScanningAlert> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\OrganizationSecretScanningAlert {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\OrganizationSecretScanningAlert::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\OrganizationSecretScanningAlert::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Service unavailable
                     **/

                    case 503:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable(503, $this->hydrator->hydrateObject(Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
