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

use function explode;
use function json_decode;
use function str_replace;

final class GetScanHistory
{
    public const OPERATION_ID    = 'secret-scanning/get-scan-history';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/secret-scanning/scan-history';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\ScanHistory $hydrator, string $owner, string $repo)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/secret-scanning/scan-history'));
    }

    public function createResponse(ResponseInterface $response): Schema\SecretScanningScanHistory|WithoutBody
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
                    /**
                     * Response
                     **/

                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\SecretScanningScanHistory::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\SecretScanningScanHistory::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Repository does not have GitHub Advanced Security or secret scanning enabled
             **/
            case 404:
                return new WithoutBody(404, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
