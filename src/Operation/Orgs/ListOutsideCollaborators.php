<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Orgs;

final class ListOutsideCollaborators
{
    public const OPERATION_ID = 'orgs/list-outside-collaborators';
    public const OPERATION_MATCH = 'GET /orgs/{org}/outside_collaborators';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/outside_collaborators';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Filter the list of outside collaborators. `2fa_disabled` means that only outside collaborators without [two-factor authentication](https://github.com/blog/1614-two-factor-authentication) enabled will be returned.**/
    private string $filter;
    /**The number of results per page (max 100).**/
    private int $per_page;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators $hydrator, string $org, string $filter = 'all', int $per_page = 30, int $page = 1)
    {
        $this->org = $org;
        $this->filter = $filter;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{filter}', '{per_page}', '{page}'), array($this->org, $this->filter, $this->per_page, $this->page), self::PATH . '?filter={filter}&per_page={per_page}&page={page}'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\Schema\SimpleUser>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\SimpleUser::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\Schema\SimpleUser {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\SimpleUser', $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
