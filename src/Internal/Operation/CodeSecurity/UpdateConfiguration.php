<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\CodeSecurity;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class UpdateConfiguration
{
    public const OPERATION_ID    = 'code-security/update-configuration';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/code-security/configurations/{configuration_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the code security configuration. **/
    private int $configurationId;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\CodeSecurity\Configurations\ConfigurationId $hydrator, string $org, int $configurationId)
    {
        $this->org             = $org;
        $this->configurationId = $configurationId;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\CodeSecurity\UpdateConfiguration\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PATCH', str_replace(['{org}', '{configuration_id}'], [$this->org, $this->configurationId], '/orgs/{org}/code-security/configurations/{configuration_id}'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\CodeSecurityConfiguration|WithoutBody
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response when a configuration is updated
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\CodeSecurityConfiguration::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\CodeSecurityConfiguration::class, $body);
                }

                break;
        }

        switch ($code) {
            /**
             * Response when no new updates are made
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
