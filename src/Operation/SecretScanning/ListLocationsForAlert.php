<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\SecretScanning;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
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

final class ListLocationsForAlert
{
    public const OPERATION_ID    = 'secret-scanning/list-locations-for-alert';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The number that identifies an alert. You can find this at the end of the URL for a code scanning alert within GitHub, and in the `number` field in the response from the `GET /repos/{owner}/{repo}/code-scanning/alerts` operation. **/
    private int $alertNumber;
    /**Page number of the results to fetch. **/
    private int $page;
    /**The number of results per page (max 100). **/
    private int $perPage;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations $hydrator, string $owner, string $repo, int $alertNumber, int $page = 1, int $perPage = 30)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->alertNumber             = $alertNumber;
        $this->page                    = $page;
        $this->perPage                 = $perPage;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{alert_number}', '{page}', '{per_page}'], [$this->owner, $this->repo, $this->alertNumber, $this->page, $this->perPage], self::PATH . '?page={page}&per_page={per_page}'));
    }

    /**
     * @return array{code: int}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
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
                return ['code' => 404];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
