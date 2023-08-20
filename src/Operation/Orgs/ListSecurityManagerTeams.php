<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Orgs;

use ApiClients\Client\GitHub\Hydrator;
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

final class ListSecurityManagerTeams
{
    public const OPERATION_ID    = 'orgs/list-security-manager-teams';
    public const OPERATION_MATCH = 'GET /orgs/{org}/security-managers';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/security-managers';
    /**The organization name. The name is not case sensitive. **/
    private string $org;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrator\Operation\Orgs\Org\SecurityManagers $hydrator, string $org)
    {
        $this->org = $org;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}'], [$this->org], self::PATH));
    }

    /** @return Observable<Schema\TeamSimple> */
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
                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\TeamSimple {
                            $error = new RuntimeException();
                            try {
                                $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\TeamSimple::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                                return $this->hydrator->hydrateObject(Schema\TeamSimple::class, $body);
                            } catch (Throwable $error) {
                                goto items_application_json_two_hundred_aaaaa;
                            }

                            items_application_json_two_hundred_aaaaa:
                            throw $error;
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
