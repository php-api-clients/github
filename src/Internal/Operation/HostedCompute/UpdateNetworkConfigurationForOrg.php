<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\HostedCompute;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
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

final class UpdateNetworkConfigurationForOrg
{
    public const OPERATION_ID    = 'hosted-compute/update-network-configuration-for-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/settings/network-configurations/{network_configuration_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**Unique identifier of the hosted compute network configuration. **/
    private string $networkConfigurationId;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Settings\NetworkConfigurations\NetworkConfigurationId $hydrator, string $org, string $networkConfigurationId)
    {
        $this->org                    = $org;
        $this->networkConfigurationId = $networkConfigurationId;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\HostedCompute\UpdateNetworkConfigurationForOrg\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PATCH', str_replace(['{org}', '{network_configuration_id}'], [$this->org, $this->networkConfigurationId], '/orgs/{org}/settings/network-configurations/{network_configuration_id}'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\NetworkConfiguration
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\NetworkConfiguration::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\NetworkConfiguration::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
