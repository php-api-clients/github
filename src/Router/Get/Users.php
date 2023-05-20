<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
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

    public function getAuthenticated(array $params)
    {
        if (array_key_exists(Hydrator\Operation\User::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User::class] = $this->hydrators->getObjectMapperOperation🌀User();
        }

        $operator = new Operator\Users\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User::class]);

        return $operator->call();
    }

    public function list_(array $params)
    {
        $arguments = [];
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $operator = new Operator\Users\List_($this->browser, $this->authentication);

        return $operator->call($arguments['since'], $arguments['per_page']);
    }

    public function checkBlocked(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\User\Blocks\Username::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Blocks\Username::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username();
        }

        $operator = new Operator\Users\CheckBlocked($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Blocks\Username::class]);

        return $operator->call($arguments['username']);
    }

    public function checkPersonIsFollowedByAuthenticated(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\User\Following\Username::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Following\Username::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username();
        }

        $operator = new Operator\Users\CheckPersonIsFollowedByAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Following\Username::class]);

        return $operator->call($arguments['username']);
    }

    public function getGpgKeyForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('gpg_key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gpg_key_id');
        }

        $arguments['gpg_key_id'] = $params['gpg_key_id'];
        unset($params['gpg_key_id']);
        if (array_key_exists(Hydrator\Operation\User\GpgKeys\GpgKeyId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\GpgKeys\GpgKeyId::class] = $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId();
        }

        $operator = new Operator\Users\GetGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\GpgKeys\GpgKeyId::class]);

        return $operator->call($arguments['gpg_key_id']);
    }

    public function getPublicSshKeyForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key_id');
        }

        $arguments['key_id'] = $params['key_id'];
        unset($params['key_id']);
        if (array_key_exists(Hydrator\Operation\User\Keys\KeyId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Keys\KeyId::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId();
        }

        $operator = new Operator\Users\GetPublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Keys\KeyId::class]);

        return $operator->call($arguments['key_id']);
    }

    public function getSshSigningKeyForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('ssh_signing_key_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ssh_signing_key_id');
        }

        $arguments['ssh_signing_key_id'] = $params['ssh_signing_key_id'];
        unset($params['ssh_signing_key_id']);
        if (array_key_exists(Hydrator\Operation\User\SshSigningKeys\SshSigningKeyId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\SshSigningKeys\SshSigningKeyId::class] = $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys🌀SshSigningKeyId();
        }

        $operator = new Operator\Users\GetSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\SshSigningKeys\SshSigningKeyId::class]);

        return $operator->call($arguments['ssh_signing_key_id']);
    }

    public function listFollowersForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Operator\Users\ListFollowersForUser($this->browser, $this->authentication);

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    public function listFollowingForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Operator\Users\ListFollowingForUser($this->browser, $this->authentication);

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    public function listGpgKeysForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Operator\Users\ListGpgKeysForUser($this->browser, $this->authentication);

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    public function getContextForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('subject_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: subject_type');
        }

        $arguments['subject_type'] = $params['subject_type'];
        unset($params['subject_type']);
        if (array_key_exists('subject_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: subject_id');
        }

        $arguments['subject_id'] = $params['subject_id'];
        unset($params['subject_id']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Hovercard::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Hovercard::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Hovercard();
        }

        $operator = new Operator\Users\GetContextForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Hovercard::class]);

        return $operator->call($arguments['username'], $arguments['subject_type'], $arguments['subject_id']);
    }

    public function listPublicKeysForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Operator\Users\ListPublicKeysForUser($this->browser, $this->authentication);

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    public function listSocialAccountsForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Operator\Users\ListSocialAccountsForUser($this->browser, $this->authentication);

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    public function listSshSigningKeysForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Operator\Users\ListSshSigningKeysForUser($this->browser, $this->authentication);

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    public function checkFollowingForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('target_user', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: target_user');
        }

        $arguments['target_user'] = $params['target_user'];
        unset($params['target_user']);
        $operator = new Operator\Users\CheckFollowingForUser($this->browser, $this->authentication);

        return $operator->call($arguments['username'], $arguments['target_user']);
    }

    public function listBlockedByAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\Blocks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Blocks::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Blocks();
        }

        $operator = new Operator\Users\ListBlockedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Blocks::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    public function listEmailsForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\Emails::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Emails::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Emails();
        }

        $operator = new Operator\Users\ListEmailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Emails::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    public function listFollowersForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\Followers::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Followers::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Followers();
        }

        $operator = new Operator\Users\ListFollowersForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Followers::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    public function listFollowedByAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\Following::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Following::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Following();
        }

        $operator = new Operator\Users\ListFollowedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Following::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    public function listGpgKeysForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\GpgKeys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\GpgKeys::class] = $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys();
        }

        $operator = new Operator\Users\ListGpgKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\GpgKeys::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    public function listPublicSshKeysForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\Keys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Keys::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Keys();
        }

        $operator = new Operator\Users\ListPublicSshKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Keys::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    public function listPublicEmailsForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\PublicEmails::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\PublicEmails::class] = $this->hydrators->getObjectMapperOperation🌀User🌀PublicEmails();
        }

        $operator = new Operator\Users\ListPublicEmailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\PublicEmails::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    public function listSocialAccountsForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\SocialAccounts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\SocialAccounts::class] = $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts();
        }

        $operator = new Operator\Users\ListSocialAccountsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\SocialAccounts::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    public function listSshSigningKeysForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\SshSigningKeys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\SshSigningKeys::class] = $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys();
        }

        $operator = new Operator\Users\ListSshSigningKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\SshSigningKeys::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    public function getByUsername(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\Username::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username();
        }

        $operator = new Operator\Users\GetByUsername($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username::class]);

        return $operator->call($arguments['username']);
    }
}
