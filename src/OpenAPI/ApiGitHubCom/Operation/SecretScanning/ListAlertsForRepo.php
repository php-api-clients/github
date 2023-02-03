<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning;

final class ListAlertsForRepo
{
    private const OPERATION_ID = 'secret-scanning/list-alerts-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/secret-scanning/alerts';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**Set to `open` or `resolved` to only list secret scanning alerts in a specific state.**/
    private string $state;
    /**A comma-separated list of secret types to return. By default all secret types are returned.
    See "[Secret scanning patterns](https://docs.github.com/code-security/secret-scanning/secret-scanning-patterns#supported-secrets-for-advanced-security)"
    for a complete list of secret types.**/
    private string $secret_type;
    /**A comma-separated list of resolutions. Only secret scanning alerts with one of these resolutions are listed. Valid resolutions are `false_positive`, `wont_fix`, `revoked`, `pattern_edited`, `pattern_deleted` or `used_in_tests`.**/
    private string $resolution;
    /**The property to sort the results by. `created` means when the alert was created. `updated` means when the alert was updated or resolved.**/
    private string $sort;
    /**The direction to sort the results by.**/
    private string $direction;
    /**Page number of the results to fetch.**/
    private int $page;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events before this cursor. To receive an initial cursor on your first request, include an empty "before" query string.**/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events after this cursor.  To receive an initial cursor on your first request, include an empty "after" query string.**/
    private string $after;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $owner, string $repo, string $state, string $secret_type, string $resolution, string $sort = 'created', string $direction = 'desc', int $page = 1, int $per_page = 30, string $before, string $after)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->owner = $owner;
        $this->repo = $repo;
        $this->state = $state;
        $this->secret_type = $secret_type;
        $this->resolution = $resolution;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->before = $before;
        $this->after = $after;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{owner}', '{repo}', '{state}', '{secret_type}', '{resolution}', '{sort}', '{direction}', '{page}', '{per_page}', '{before}', '{after}'), array($this->owner, $this->repo, $this->state, $this->secret_type, $this->resolution, $this->sort, $this->direction, $this->page, $this->per_page, $this->before, $this->after), '/repos/{owner}/{repo}/secret-scanning/alerts?state={state}&secret_type={secret_type}&resolution={resolution}&sort={sort}&direction={direction}&page={page}&per_page={per_page}&before={before}&after={after}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert>|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListAlertsForRepo\Response\Application\Json\H503
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|int|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListAlertsForRepo\Response\Application\Json\H503
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanningAlert {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\SecretScanningAlert', $body);
                        });
                }
                break;
            /**Repository is public or secret scanning is disabled for the repository**/
            case 404:
                return 404;
                break;
            /**Service unavailable**/
            case 503:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\ListAlertsForRepo\Response\Application\Json\H503::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Operation\\ListAlertsForRepo\\Response\\Application\\Json\\H503', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
