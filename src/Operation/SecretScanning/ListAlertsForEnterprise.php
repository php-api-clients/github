<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\SecretScanning;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListAlertsForEnterprise
{
    public const OPERATION_ID = 'secret-scanning/list-alerts-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/secret-scanning/alerts';
    private const METHOD = 'GET';
    private const PATH = '/enterprises/{enterprise}/secret-scanning/alerts';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**Set to `open` or `resolved` to only list secret scanning alerts in a specific state.**/
    private string $state;
    /**A comma-separated list of secret types to return. By default all secret types are returned.
    See "[Secret scanning patterns](https://docs.github.com/code-security/secret-scanning/secret-scanning-patterns#supported-secrets-for-advanced-security)"
    for a complete list of secret types.**/
    private string $secret_type;
    /**A comma-separated list of resolutions. Only secret scanning alerts with one of these resolutions are listed. Valid resolutions are `false_positive`, `wont_fix`, `revoked`, `pattern_edited`, `pattern_deleted` or `used_in_tests`.**/
    private string $resolution;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results before this cursor.**/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for results after this cursor.**/
    private string $after;
    /**The property to sort the results by. `created` means when the alert was created. `updated` means when the alert was updated or resolved.**/
    private string $sort;
    /**The direction to sort the results by.**/
    private string $direction;
    /**The number of results per page (max 100).**/
    private int $per_page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts $hydrator, string $enterprise, string $state, string $secret_type, string $resolution, string $before, string $after, string $sort = 'created', string $direction = 'desc', int $per_page = 30)
    {
        $this->enterprise = $enterprise;
        $this->state = $state;
        $this->secret_type = $secret_type;
        $this->resolution = $resolution;
        $this->before = $before;
        $this->after = $after;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->per_page = $per_page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{enterprise}', '{state}', '{secret_type}', '{resolution}', '{before}', '{after}', '{sort}', '{direction}', '{per_page}'), array($this->enterprise, $this->state, $this->secret_type, $this->resolution, $this->before, $this->after, $this->sort, $this->direction, $this->per_page), self::PATH . '?state={state}&secret_type={secret_type}&resolution={resolution}&before={before}&after={after}&sort={sort}&direction={direction}&per_page={per_page}'));
    }
    /**
     * @return \Rx\Observable<Schema\OrganizationSecretScanningAlert>|Schema\BasicError|Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|Schema\BasicError|Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Service unavailable**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\OrganizationSecretScanningAlert::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\OrganizationSecretScanningAlert {
                            return $this->hydrator->hydrateObject(Schema\OrganizationSecretScanningAlert::class, $body);
                        });
                }
                break;
            /**Service unavailable**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\BasicError::class, $body);
                }
                break;
            /**Service unavailable**/
            case 503:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
