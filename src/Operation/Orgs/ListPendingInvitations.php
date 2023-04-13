<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Orgs;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class ListPendingInvitations
{
    public const OPERATION_ID = 'orgs/list-pending-invitations';
    public const OPERATION_MATCH = 'GET /orgs/{org}/invitations';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/invitations';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    /**Filter invitations by their member role.**/
    private string $role;
    /**Filter invitations by their invitation source.**/
    private string $invitationSource;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Invitations $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Invitations $hydrator, string $org, int $perPage = 30, int $page = 1, string $role = 'all', string $invitationSource = 'all')
    {
        $this->org = $org;
        $this->perPage = $perPage;
        $this->page = $page;
        $this->role = $role;
        $this->invitationSource = $invitationSource;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{per_page}', '{page}', '{role}', '{invitation_source}'), array($this->org, $this->perPage, $this->page, $this->role, $this->invitationSource), self::PATH . '?per_page={per_page}&page={page}&role={role}&invitation_source={invitation_source}'));
    }
    /**
     * @return \Rx\Observable<Schema\OrganizationInvitation>
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        $code = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                    **/
                    case 200:
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\OrganizationInvitation::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\OrganizationInvitation {
                            return $this->hydrator->hydrateObject(Schema\OrganizationInvitation::class, $body);
                        });
                    /**
                     * Resource not found
                    **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
