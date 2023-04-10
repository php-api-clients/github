<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\SecretScanning;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListAlertsForOrg
{
    public const OPERATION_ID = 'secret-scanning/list-alerts-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/secret-scanning/alerts';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/secret-scanning/alerts';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Set to `open` or `resolved` to only list secret scanning alerts in a specific state.**/
    private string $state;
    /**A comma-separated list of secret types to return. By default all secret types are returned.
    See "[Secret scanning patterns](https://docs.github.com/code-security/secret-scanning/secret-scanning-patterns#supported-secrets-for-advanced-security)"
    for a complete list of secret types.**/
    private string $secretType;
    /**A comma-separated list of resolutions. Only secret scanning alerts with one of these resolutions are listed. Valid resolutions are `false_positive`, `wont_fix`, `revoked`, `pattern_edited`, `pattern_deleted` or `used_in_tests`.**/
    private string $resolution;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events before this cursor. To receive an initial cursor on your first request, include an empty "before" query string.**/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for events after this cursor.  To receive an initial cursor on your first request, include an empty "after" query string.**/
    private string $after;
    /**The property to sort the results by. `created` means when the alert was created. `updated` means when the alert was updated or resolved.**/
    private string $sort;
    /**The direction to sort the results by.**/
    private string $direction;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The number of results per page (max 100).**/
    private int $perPage;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\SecretScanning\Alerts $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\SecretScanning\Alerts $hydrator, string $org, string $state, string $secretType, string $resolution, string $before, string $after, string $sort = 'created', string $direction = 'desc', int $page = 1, int $perPage = 30)
    {
        $this->org = $org;
        $this->state = $state;
        $this->secretType = $secretType;
        $this->resolution = $resolution;
        $this->before = $before;
        $this->after = $after;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->page = $page;
        $this->perPage = $perPage;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{state}', '{secret_type}', '{resolution}', '{before}', '{after}', '{sort}', '{direction}', '{page}', '{per_page}'), array($this->org, $this->state, $this->secretType, $this->resolution, $this->before, $this->after, $this->sort, $this->direction, $this->page, $this->perPage), self::PATH . '?state={state}&secret_type={secret_type}&resolution={resolution}&before={before}&after={after}&sort={sort}&direction={direction}&page={page}&per_page={per_page}'));
    }
    /**
     * @return \Rx\Observable<Schema\OrganizationSecretScanningAlert>
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\OrganizationSecretScanningAlert::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\OrganizationSecretScanningAlert {
                            return $this->hydrator->hydrateObject(Schema\OrganizationSecretScanningAlert::class, $body);
                        });
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
            /**Service unavailable**/
            case 503:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503(503, $this->hydrator->hydrateObject(Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
