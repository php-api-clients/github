<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin;

final class GetAuditLog_
{
    private const OPERATION_ID = 'enterprise-admin/get-audit-log';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/audit-log';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private readonly string $enterprise;
    /**A search phrase. For more information, see [Searching the audit log](https://docs.github.com/github-ae@latest/github/setting-up-and-managing-organizations-and-teams/reviewing-the-audit-log-for-your-organization#searching-the-audit-log).**/
    private readonly string $phrase;
    /**A cursor, as given in the [Link header](https://docs.github.com/github-ae@latest/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events after this cursor.**/
    private readonly string $after;
    /**A cursor, as given in the [Link header](https://docs.github.com/github-ae@latest/rest/overview/resources-in-the-rest-api#link-header). If specified, the query only searches for events before this cursor.**/
    private readonly string $before;
    /**The order of audit log events. To list newest events first, specify `desc`. To list oldest events first, specify `asc`.
    
    The default is `desc`.**/
    private readonly string $order;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, string $enterprise, string $phrase, string $after, string $before, string $order, int $page = 1, int $per_page = 30)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->enterprise = $enterprise;
        $this->phrase = $phrase;
        $this->after = $after;
        $this->before = $before;
        $this->order = $order;
        $this->page = $page;
        $this->per_page = $per_page;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{enterprise}', '{phrase}', '{after}', '{before}', '{order}', '{page}', '{per_page}'), array($this->enterprise, $this->phrase, $this->after, $this->before, $this->order, $this->page, $this->per_page), '/enterprises/{enterprise}/audit-log?phrase={phrase}&after={after}&before={before}&order={order}&page={page}&per_page={per_page}'));
    }
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0F2007B235Be140C866E9B1Ed7599397
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        $hydrator = new \WyriHaximus\Hydrator\Hydrator();
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0F2007B235Be140C866E9B1Ed7599397::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $hydrator->hydrate('\\ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\Schema\\Unknown\\C0F2007B235Be140C866E9B1Ed7599397', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}