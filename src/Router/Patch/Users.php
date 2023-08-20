<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\PrivateUser;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Users
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\Email> | array{code: int}) */
    public function setPrimaryEmailVisibilityForAuthenticatedUser(array $params): iterable
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\Email\Visibility::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Email\Visibility::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Email🌀Visibility();
        }

        $operator = new Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Email\Visibility::class]);

        return $operator->call($params);
    }

    /** @return (Schema\PrivateUser | array{code: int}) */
    public function updateAuthenticated(array $params): PrivateUser|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User::class] = $this->hydrators->getObjectMapperOperation🌀User();
        }

        $operator = new Operator\Users\UpdateAuthenticated($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User::class]);

        return $operator->call($params);
    }
}
