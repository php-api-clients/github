<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\CodeScanning;

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

final class ListAlertsForRepoListing
{
    public const OPERATION_ID    = 'code-scanning/list-alerts-for-repo';
    public const OPERATION_MATCH = 'LIST /repos/{owner}/{repo}/code-scanning/alerts';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The name of a code scanning tool. Only results by this tool will be listed. You can specify the tool by using either `tool_name` or `tool_guid`, but not both. **/
    private string $toolName;
    /**The GUID of a code scanning tool. Only results by this tool will be listed. Note that some code scanning tools may not include a GUID in their analysis data. You can specify the tool by using either `tool_guid` or `tool_name`, but not both. **/
    private string|null $toolGuid;
    /**The Git reference for the results you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`. **/
    private string $ref;
    /**The number of the pull request for the results you want to list. **/
    private int $pr;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results before this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results after this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $after;
    /**If specified, only code scanning alerts with this state will be returned. **/
    private string $state;
    /**If specified, only code scanning alerts with this severity will be returned. **/
    private string $severity;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The property by which to sort the results. **/
    private string $sort;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts $hydrator, string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, int $pr, string $before, string $after, string $state, string $severity, int $page = 1, int $perPage = 30, string $direction = 'desc', string $sort = 'created')
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->toolName  = $toolName;
        $this->toolGuid  = $toolGuid;
        $this->ref       = $ref;
        $this->pr        = $pr;
        $this->before    = $before;
        $this->after     = $after;
        $this->state     = $state;
        $this->severity  = $severity;
        $this->page      = $page;
        $this->perPage   = $perPage;
        $this->direction = $direction;
        $this->sort      = $sort;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{tool_name}', '{tool_guid}', '{ref}', '{pr}', '{before}', '{after}', '{state}', '{severity}', '{page}', '{per_page}', '{direction}', '{sort}'], [$this->owner, $this->repo, $this->toolName, $this->toolGuid, $this->ref, $this->pr, $this->before, $this->after, $this->state, $this->severity, $this->page, $this->perPage, $this->direction, $this->sort], '/repos/{owner}/{repo}/code-scanning/alerts' . '?tool_name={tool_name}&tool_guid={tool_guid}&ref={ref}&pr={pr}&before={before}&after={after}&state={state}&severity={severity}&page={page}&per_page={per_page}&direction={direction}&sort={sort}'));
    }

    /** @return Observable<Schema\CodeScanningAlertItems>|WithoutBody */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\CodeScanningAlertItems {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\CodeScanningAlertItems::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\CodeScanningAlertItems::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                    /**
                     * Response if GitHub Advanced Security is not enabled for this repository
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
             * Not modified
             **/
            case 304:
                return new WithoutBody(304, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
