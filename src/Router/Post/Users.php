<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\GpgKey;
use ApiClients\Client\GitHub\Schema\Key;
use ApiClients\Client\GitHub\Schema\SshSigningKey;
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
    public function addEmailForAuthenticatedUser(array $params): iterable
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\Emails::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Emails::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Emails();
        }

        $operator = new Operator\Users\AddEmailForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Emails::class]);

        return $operator->call($params);
    }

    /** @return (Schema\GpgKey | array{code: int}) */
    public function createGpgKeyForAuthenticatedUser(array $params): GpgKey|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\GpgKeys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\GpgKeys::class] = $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys();
        }

        $operator = new Operator\Users\CreateGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\GpgKeys::class]);

        return $operator->call($params);
    }

    /** @return (Schema\Key | array{code: int}) */
    public function createPublicSshKeyForAuthenticatedUser(array $params): Key|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\Keys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Keys::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Keys();
        }

        $operator = new Operator\Users\CreatePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Keys::class]);

        return $operator->call($params);
    }

    /** @return (iterable<Schema\SocialAccount> | array{code: int}) */
    public function addSocialAccountForAuthenticatedUser(array $params): iterable
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\SocialAccounts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\SocialAccounts::class] = $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts();
        }

        $operator = new Operator\Users\AddSocialAccountForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\SocialAccounts::class]);

        return $operator->call($params);
    }

    /** @return (Schema\SshSigningKey | array{code: int}) */
    public function createSshSigningKeyForAuthenticatedUser(array $params): SshSigningKey|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\SshSigningKeys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\SshSigningKeys::class] = $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys();
        }

        $operator = new Operator\Users\CreateSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\SshSigningKeys::class]);

        return $operator->call($params);
    }
}
