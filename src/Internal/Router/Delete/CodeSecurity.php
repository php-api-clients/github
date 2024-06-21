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

final class CodeSecurity
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    public function deleteConfiguration(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('configuration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: configuration_id');
        }

        $arguments['configuration_id'] = $params['configuration_id'];
        unset($params['configuration_id']);
        $operator = new Internal\Operator\CodeSecurity\DeleteConfiguration($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId());

        return $operator->call($arguments['org'], $arguments['configuration_id']);
    }
}
