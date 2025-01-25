<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Delete;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class HostedCompute
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function deleteNetworkConfigurationFromOrg(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('network_configuration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: network_configuration_id');
        }

        $arguments['network_configuration_id'] = $params['network_configuration_id'];
        unset($params['network_configuration_id']);
        $operator = new Internal\Operator\HostedCompute\DeleteNetworkConfigurationFromOrg($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['network_configuration_id']);
    }
}
