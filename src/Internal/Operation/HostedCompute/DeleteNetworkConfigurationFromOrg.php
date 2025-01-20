<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\HostedCompute;

use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteNetworkConfigurationFromOrg
{
    public const OPERATION_ID    = 'hosted-compute/delete-network-configuration-from-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/settings/network-configurations/{network_configuration_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**Unique identifier of the hosted compute network configuration. **/
    private string $networkConfigurationId;

    public function __construct(string $org, string $networkConfigurationId)
    {
        $this->org                    = $org;
        $this->networkConfigurationId = $networkConfigurationId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('DELETE', str_replace(['{org}', '{network_configuration_id}'], [$this->org, $this->networkConfigurationId], '/orgs/{org}/settings/network-configurations/{network_configuration_id}'));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
