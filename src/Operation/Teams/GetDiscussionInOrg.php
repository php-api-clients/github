<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Teams;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetDiscussionInOrg
{
    public const OPERATION_ID = 'teams/get-discussion-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $team_slug;
    /**The number that identifies the discussion.**/
    private int $discussion_number;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb $hydrator, string $org, string $team_slug, int $discussion_number)
    {
        $this->org = $org;
        $this->team_slug = $team_slug;
        $this->discussion_number = $discussion_number;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{team_slug}', '{discussion_number}'), array($this->org, $this->team_slug, $this->discussion_number), self::PATH));
    }
    /**
     * @return Schema\TeamDiscussion
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\TeamDiscussion
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\TeamDiscussion::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\TeamDiscussion::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
