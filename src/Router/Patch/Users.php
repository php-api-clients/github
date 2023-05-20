<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Users
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function setPrimaryEmailVisibilityForAuthenticatedUser(array $params)
    {
        if (array_key_exists(Hydrator\Operation\User\Email\Visibility::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Email\Visibility::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Email🌀Visibility();
        }

        $operator = new Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Email\Visibility::class]);

        return $operator->call($params);
    }

    public function updateAuthenticated(array $params)
    {
        if (array_key_exists(Hydrator\Operation\User::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User::class] = $this->hydrators->getObjectMapperOperation🌀User();
        }

        $operator = new Operator\Users\UpdateAuthenticated($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User::class]);

        return $operator->call($params);
    }
}
