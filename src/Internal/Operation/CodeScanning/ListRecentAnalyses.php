<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\CodeScanning;

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

final class ListRecentAnalyses
{
    public const OPERATION_ID    = 'code-scanning/list-recent-analyses';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/analyses';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The name of a code scanning tool. Only results by this tool will be listed. You can specify the tool by using either `tool_name` or `tool_guid`, but not both. **/
    private string $toolName;
    /**The GUID of a code scanning tool. Only results by this tool will be listed. Note that some code scanning tools may not include a GUID in their analysis data. You can specify the tool by using either `tool_guid` or `tool_name`, but not both. **/
    private string|null $toolGuid;
    /**The number of the pull request for the results you want to list. **/
    private int $pr;
    /**The Git reference for the analyses you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`. **/
    private string $ref;
    /**Filter analyses belonging to the same SARIF upload. **/
    private string $sarifId;
    /**The page number of the results to fetch. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $page;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The property by which to sort the results. **/
    private string $sort;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses $hydrator, string $owner, string $repo, string $toolName, string|null $toolGuid, int $pr, string $ref, string $sarifId, int $page = 1, int $perPage = 30, string $direction = 'desc', string $sort = 'created')
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->toolName  = $toolName;
        $this->toolGuid  = $toolGuid;
        $this->pr        = $pr;
        $this->ref       = $ref;
        $this->sarifId   = $sarifId;
        $this->page      = $page;
        $this->perPage   = $perPage;
        $this->direction = $direction;
        $this->sort      = $sort;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{owner}', '{repo}', '{tool_name}', '{tool_guid}', '{pr}', '{ref}', '{sarif_id}', '{page}', '{per_page}', '{direction}', '{sort}'], [$this->owner, $this->repo, $this->toolName, $this->toolGuid, $this->pr, $this->ref, $this->sarifId, $this->page, $this->perPage, $this->direction, $this->sort], '/repos/{owner}/{repo}/code-scanning/analyses' . '?tool_name={tool_name}&tool_guid={tool_guid}&pr={pr}&ref={ref}&sarif_id={sarif_id}&page={page}&per_page={per_page}&direction={direction}&sort={sort}'));
    }

    /** @return Observable<Schema\CodeScanningAnalysis> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\CodeScanningAnalysis {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\CodeScanningAnalysis::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\CodeScanningAnalysis::class, $body);
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

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
