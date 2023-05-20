<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\CodeScanning;

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

final class ListRecentAnalyses
{
    public const OPERATION_ID    = 'code-scanning/list-recent-analyses';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/analyses';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/code-scanning/analyses';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The name of a code scanning tool. Only results by this tool will be listed. You can specify the tool by using either `tool_name` or `tool_guid`, but not both. **/
    private string $toolName;
    /**The GUID of a code scanning tool. Only results by this tool will be listed. Note that some code scanning tools may not include a GUID in their analysis data. You can specify the tool by using either `tool_guid` or `tool_name`, but not both. **/
    private string|null $toolGuid;
    /**The Git reference for the analyses you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`. **/
    private string $ref;
    /**Filter analyses belonging to the same SARIF upload. **/
    private string $sarifId;
    /**Page number of the results to fetch. **/
    private int $page;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The property by which to sort the results. **/
    private string $sort;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses $hydrator, string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, string $sarifId, int $page = 1, int $perPage = 30, string $direction = 'desc', string $sort = 'created')
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->toolName                = $toolName;
        $this->toolGuid                = $toolGuid;
        $this->ref                     = $ref;
        $this->sarifId                 = $sarifId;
        $this->page                    = $page;
        $this->perPage                 = $perPage;
        $this->direction               = $direction;
        $this->sort                    = $sort;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{tool_name}', '{tool_guid}', '{ref}', '{sarif_id}', '{page}', '{per_page}', '{direction}', '{sort}'], [$this->owner, $this->repo, $this->toolName, $this->toolGuid, $this->ref, $this->sarifId, $this->page, $this->perPage, $this->direction, $this->sort], self::PATH . '?tool_name={tool_name}&tool_guid={tool_guid}&ref={ref}&sarif_id={sarif_id}&page={page}&per_page={per_page}&direction={direction}&sort={sort}'));
    }

    public function createResponse(ResponseInterface $response): mixed
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
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
