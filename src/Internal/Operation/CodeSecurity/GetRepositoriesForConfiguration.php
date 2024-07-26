<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\CodeSecurity;

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

final class GetRepositoriesForConfiguration
{
    public const OPERATION_ID    = 'code-security/get-repositories-for-configuration';
    public const OPERATION_MATCH = 'GET /orgs/{org}/code-security/configurations/{configuration_id}/repositories';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the code security configuration. **/
    private int $configurationId;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results before this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results after this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $after;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**A comma-separated list of statuses. If specified, only repositories with these attachment statuses will be returned.

    Can be: `all`, `attached`, `attaching`, `detached`, `removed`, `enforced`, `failed`, `updating`, `removed_by_enterprise` **/
    private string $status;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId\Repositories $hydrator, string $org, int $configurationId, string $before, string $after, int $perPage = 30, string $status = 'all')
    {
        $this->org             = $org;
        $this->configurationId = $configurationId;
        $this->before          = $before;
        $this->after           = $after;
        $this->perPage         = $perPage;
        $this->status          = $status;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{configuration_id}', '{before}', '{after}', '{per_page}', '{status}'], [$this->org, $this->configurationId, $this->before, $this->after, $this->perPage, $this->status], '/orgs/{org}/code-security/configurations/{configuration_id}/repositories' . '?before={before}&after={after}&per_page={per_page}&status={status}'));
    }

    /** @return Observable<Schema\CodeSecurityConfigurationRepositories> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\CodeSecurityConfigurationRepositories {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\CodeSecurityConfigurationRepositories::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\CodeSecurityConfigurationRepositories::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Forbidden
                     **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(403, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
