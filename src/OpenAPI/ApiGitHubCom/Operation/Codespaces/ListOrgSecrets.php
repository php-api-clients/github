<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\Codespaces\ListOrgSecrets\Response\Applicationjson\H200;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class ListOrgSecrets
{
    public const OPERATION_ID    = 'codespaces/list-org-secrets';
    public const OPERATION_MATCH = 'GET /orgs/{org}/codespaces/secrets';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/codespaces/secrets';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Secrets $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Secrets $hydrator, string $org, int $per_page = 30, int $page = 1)
    {
        $this->org                     = $org;
        $this->per_page                = $per_page;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{per_page}', '{page}'], [$this->org, $this->per_page, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    function createResponse(ResponseInterface $response): H200
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Operation\\Codespaces\\ListOrgSecrets\\Response\\Applicationjson\\H200', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
