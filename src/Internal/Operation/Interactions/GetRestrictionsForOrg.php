<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Interactions;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Throwable;

use function explode;
use function json_decode;
use function str_replace;

final class GetRestrictionsForOrg
{
    public const OPERATION_ID    = 'interactions/get-restrictions-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/interaction-limits';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/interaction-limits';
    /**The organization name. The name is not case sensitive. **/
    private string $org;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\InteractionLimits $hydrator, string $org)
    {
        $this->org = $org;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}'], [$this->org], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\InteractionLimitResponse|Schema\Operations\Interactions\GetRestrictionsForOrg\Response\ApplicationJson\Ok\Application\Json\One
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
                        $error = new RuntimeException();
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\InteractionLimitResponse::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrators->hydrateObject(Schema\InteractionLimitResponse::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_two_hundred_aaaaa;
                        }

                        items_application_json_two_hundred_aaaaa:
                        try {
                            $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Interactions\GetRestrictionsForOrg\Response\ApplicationJson\Ok\Application\Json\One::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                            return $this->hydrators->hydrateObject(Schema\Operations\Interactions\GetRestrictionsForOrg\Response\ApplicationJson\Ok\Application\Json\One::class, $body);
                        } catch (Throwable) {
                            goto items_application_json_two_hundred_aaaab;
                        }

                        items_application_json_two_hundred_aaaab:
                        throw $error;
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
