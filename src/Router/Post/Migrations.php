<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Migration;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Migrations
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function startForOrg(array $params): Migration|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Migrations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Migrations::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations();
        }

        $operator = new Operator\Migrations\StartForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Migrations::class]);

        return $operator->call($arguments['org'], $params);
    }

    /** @return (Schema\Migration | array{code: int}) */
    public function startForAuthenticatedUser(array $params): Migration|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\Migrations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Migrations::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Migrations();
        }

        $operator = new Operator\Migrations\StartForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Migrations::class]);

        return $operator->call($params);
    }
}
