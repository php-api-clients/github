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
use function str_replace;

final class GetNetworkSettingsForOrg
{
    public const OPERATION_ID    = 'hosted-compute/get-network-settings-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/settings/network-settings/{network_settings_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**Unique identifier of the hosted compute network settings. **/
    private string $networkSettingsId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Settings\NetworkSettings\NetworkSettingsId $hydrator, string $org, string $networkSettingsId)
    {
        $this->org               = $org;
        $this->networkSettingsId = $networkSettingsId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{org}', '{network_settings_id}'], [$this->org, $this->networkSettingsId], '/orgs/{org}/settings/network-settings/{network_settings_id}'));
    }

    public function createResponse(ResponseInterface $response): Schema\NetworkSettings
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\NetworkSettings::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\NetworkSettings::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
