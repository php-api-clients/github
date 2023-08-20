<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Users
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getAuthenticated(): Schema\Operations\Users\GetAuthenticated\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Users\GetAuthenticated::class, $this->operator) === false) {
            $this->operator[Operator\Users\GetAuthenticated::class] = new Operator\Users\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());
        }

        return $this->operator[Operator\Users\GetAuthenticated::class]->call();
    }

    public function updateAuthenticated(array $params): Schema\PrivateUser
    {
        if (array_key_exists(Operator\Users\UpdateAuthenticated::class, $this->operator) === false) {
            $this->operator[Operator\Users\UpdateAuthenticated::class] = new Operator\Users\UpdateAuthenticated($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());
        }

        return $this->operator[Operator\Users\UpdateAuthenticated::class]->call($params);
    }

    public function listBlockedByAuthenticatedUser(int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\ListBlockedByAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListBlockedByAuthenticatedUser::class] = new Operator\Users\ListBlockedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks());
        }

        return $this->operator[Operator\Users\ListBlockedByAuthenticatedUser::class]->call($perPage, $page);
    }

    public function checkBlocked(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Users\CheckBlocked::class, $this->operator) === false) {
            $this->operator[Operator\Users\CheckBlocked::class] = new Operator\Users\CheckBlocked($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());
        }

        return $this->operator[Operator\Users\CheckBlocked::class]->call($username);
    }

    public function block(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Users\Block::class, $this->operator) === false) {
            $this->operator[Operator\Users\Block::class] = new Operator\Users\Block($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());
        }

        return $this->operator[Operator\Users\Block::class]->call($username);
    }

    public function unblock(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Users\Unblock::class, $this->operator) === false) {
            $this->operator[Operator\Users\Unblock::class] = new Operator\Users\Unblock($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());
        }

        return $this->operator[Operator\Users\Unblock::class]->call($username);
    }

    public function setPrimaryEmailVisibilityForAuthenticatedUser(array $params): Schema\Email
    {
        if (array_key_exists(Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser::class] = new Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Email🌀Visibility());
        }

        return $this->operator[Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser::class]->call($params);
    }

    public function listEmailsForAuthenticatedUser(int $perPage, int $page): Schema\Email
    {
        if (array_key_exists(Operator\Users\ListEmailsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListEmailsForAuthenticatedUser::class] = new Operator\Users\ListEmailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->operator[Operator\Users\ListEmailsForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function addEmailForAuthenticatedUser(array $params): Schema\Email
    {
        if (array_key_exists(Operator\Users\AddEmailForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\AddEmailForAuthenticatedUser::class] = new Operator\Users\AddEmailForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->operator[Operator\Users\AddEmailForAuthenticatedUser::class]->call($params);
    }

    public function deleteEmailForAuthenticatedUser(array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Users\DeleteEmailForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\DeleteEmailForAuthenticatedUser::class] = new Operator\Users\DeleteEmailForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->operator[Operator\Users\DeleteEmailForAuthenticatedUser::class]->call($params);
    }

    public function listFollowersForAuthenticatedUser(int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\ListFollowersForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListFollowersForAuthenticatedUser::class] = new Operator\Users\ListFollowersForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Followers());
        }

        return $this->operator[Operator\Users\ListFollowersForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listFollowedByAuthenticatedUser(int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\ListFollowedByAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListFollowedByAuthenticatedUser::class] = new Operator\Users\ListFollowedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following());
        }

        return $this->operator[Operator\Users\ListFollowedByAuthenticatedUser::class]->call($perPage, $page);
    }

    public function checkPersonIsFollowedByAuthenticated(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Users\CheckPersonIsFollowedByAuthenticated::class, $this->operator) === false) {
            $this->operator[Operator\Users\CheckPersonIsFollowedByAuthenticated::class] = new Operator\Users\CheckPersonIsFollowedByAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->operator[Operator\Users\CheckPersonIsFollowedByAuthenticated::class]->call($username);
    }

    public function follow(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Users\Follow::class, $this->operator) === false) {
            $this->operator[Operator\Users\Follow::class] = new Operator\Users\Follow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->operator[Operator\Users\Follow::class]->call($username);
    }

    public function unfollow(string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Users\Unfollow::class, $this->operator) === false) {
            $this->operator[Operator\Users\Unfollow::class] = new Operator\Users\Unfollow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->operator[Operator\Users\Unfollow::class]->call($username);
    }

    public function listGpgKeysForAuthenticatedUser(int $perPage, int $page): Schema\GpgKey
    {
        if (array_key_exists(Operator\Users\ListGpgKeysForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListGpgKeysForAuthenticatedUser::class] = new Operator\Users\ListGpgKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->operator[Operator\Users\ListGpgKeysForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function createGpgKeyForAuthenticatedUser(array $params): Schema\GpgKey
    {
        if (array_key_exists(Operator\Users\CreateGpgKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\CreateGpgKeyForAuthenticatedUser::class] = new Operator\Users\CreateGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->operator[Operator\Users\CreateGpgKeyForAuthenticatedUser::class]->call($params);
    }

    public function getGpgKeyForAuthenticatedUser(int $gpgKeyId): Schema\GpgKey
    {
        if (array_key_exists(Operator\Users\GetGpgKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\GetGpgKeyForAuthenticatedUser::class] = new Operator\Users\GetGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());
        }

        return $this->operator[Operator\Users\GetGpgKeyForAuthenticatedUser::class]->call($gpgKeyId);
    }

    public function deleteGpgKeyForAuthenticatedUser(int $gpgKeyId): ResponseInterface
    {
        if (array_key_exists(Operator\Users\DeleteGpgKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\DeleteGpgKeyForAuthenticatedUser::class] = new Operator\Users\DeleteGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());
        }

        return $this->operator[Operator\Users\DeleteGpgKeyForAuthenticatedUser::class]->call($gpgKeyId);
    }

    public function listPublicSshKeysForAuthenticatedUser(int $perPage, int $page): Schema\Key
    {
        if (array_key_exists(Operator\Users\ListPublicSshKeysForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListPublicSshKeysForAuthenticatedUser::class] = new Operator\Users\ListPublicSshKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->operator[Operator\Users\ListPublicSshKeysForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function createPublicSshKeyForAuthenticatedUser(array $params): Schema\Key
    {
        if (array_key_exists(Operator\Users\CreatePublicSshKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\CreatePublicSshKeyForAuthenticatedUser::class] = new Operator\Users\CreatePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->operator[Operator\Users\CreatePublicSshKeyForAuthenticatedUser::class]->call($params);
    }

    public function getPublicSshKeyForAuthenticatedUser(int $keyId): Schema\Key
    {
        if (array_key_exists(Operator\Users\GetPublicSshKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\GetPublicSshKeyForAuthenticatedUser::class] = new Operator\Users\GetPublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());
        }

        return $this->operator[Operator\Users\GetPublicSshKeyForAuthenticatedUser::class]->call($keyId);
    }

    public function deletePublicSshKeyForAuthenticatedUser(int $keyId): ResponseInterface
    {
        if (array_key_exists(Operator\Users\DeletePublicSshKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\DeletePublicSshKeyForAuthenticatedUser::class] = new Operator\Users\DeletePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());
        }

        return $this->operator[Operator\Users\DeletePublicSshKeyForAuthenticatedUser::class]->call($keyId);
    }

    public function listPublicEmailsForAuthenticatedUser(int $perPage, int $page): Schema\Email
    {
        if (array_key_exists(Operator\Users\ListPublicEmailsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListPublicEmailsForAuthenticatedUser::class] = new Operator\Users\ListPublicEmailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀PublicEmails());
        }

        return $this->operator[Operator\Users\ListPublicEmailsForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listSocialAccountsForAuthenticatedUser(int $perPage, int $page): Schema\SocialAccount
    {
        if (array_key_exists(Operator\Users\ListSocialAccountsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListSocialAccountsForAuthenticatedUser::class] = new Operator\Users\ListSocialAccountsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->operator[Operator\Users\ListSocialAccountsForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function addSocialAccountForAuthenticatedUser(array $params): Schema\SocialAccount
    {
        if (array_key_exists(Operator\Users\AddSocialAccountForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\AddSocialAccountForAuthenticatedUser::class] = new Operator\Users\AddSocialAccountForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->operator[Operator\Users\AddSocialAccountForAuthenticatedUser::class]->call($params);
    }

    public function deleteSocialAccountForAuthenticatedUser(array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Users\DeleteSocialAccountForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\DeleteSocialAccountForAuthenticatedUser::class] = new Operator\Users\DeleteSocialAccountForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->operator[Operator\Users\DeleteSocialAccountForAuthenticatedUser::class]->call($params);
    }

    public function listSshSigningKeysForAuthenticatedUser(int $perPage, int $page): Schema\SshSigningKey
    {
        if (array_key_exists(Operator\Users\ListSshSigningKeysForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListSshSigningKeysForAuthenticatedUser::class] = new Operator\Users\ListSshSigningKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys());
        }

        return $this->operator[Operator\Users\ListSshSigningKeysForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function createSshSigningKeyForAuthenticatedUser(array $params): Schema\SshSigningKey
    {
        if (array_key_exists(Operator\Users\CreateSshSigningKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\CreateSshSigningKeyForAuthenticatedUser::class] = new Operator\Users\CreateSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys());
        }

        return $this->operator[Operator\Users\CreateSshSigningKeyForAuthenticatedUser::class]->call($params);
    }

    public function getSshSigningKeyForAuthenticatedUser(int $sshSigningKeyId): Schema\SshSigningKey
    {
        if (array_key_exists(Operator\Users\GetSshSigningKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\GetSshSigningKeyForAuthenticatedUser::class] = new Operator\Users\GetSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys🌀SshSigningKeyId());
        }

        return $this->operator[Operator\Users\GetSshSigningKeyForAuthenticatedUser::class]->call($sshSigningKeyId);
    }

    public function deleteSshSigningKeyForAuthenticatedUser(int $sshSigningKeyId): ResponseInterface
    {
        if (array_key_exists(Operator\Users\DeleteSshSigningKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\DeleteSshSigningKeyForAuthenticatedUser::class] = new Operator\Users\DeleteSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys🌀SshSigningKeyId());
        }

        return $this->operator[Operator\Users\DeleteSshSigningKeyForAuthenticatedUser::class]->call($sshSigningKeyId);
    }

    public function list(int $since, int $perPage): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\List_::class, $this->operator) === false) {
            $this->operator[Operator\Users\List_::class] = new Operator\Users\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users());
        }

        return $this->operator[Operator\Users\List_::class]->call($since, $perPage);
    }

    public function getByUsername(string $username): Schema\Operations\Users\GetByUsername\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Users\GetByUsername::class, $this->operator) === false) {
            $this->operator[Operator\Users\GetByUsername::class] = new Operator\Users\GetByUsername($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username());
        }

        return $this->operator[Operator\Users\GetByUsername::class]->call($username);
    }

    public function listFollowersForUser(string $username, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\ListFollowersForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListFollowersForUser::class] = new Operator\Users\ListFollowersForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Followers());
        }

        return $this->operator[Operator\Users\ListFollowersForUser::class]->call($username, $perPage, $page);
    }

    public function listFollowingForUser(string $username, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Users\ListFollowingForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListFollowingForUser::class] = new Operator\Users\ListFollowingForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following());
        }

        return $this->operator[Operator\Users\ListFollowingForUser::class]->call($username, $perPage, $page);
    }

    public function checkFollowingForUser(string $username, string $targetUser): ResponseInterface
    {
        if (array_key_exists(Operator\Users\CheckFollowingForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\CheckFollowingForUser::class] = new Operator\Users\CheckFollowingForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following🌀TargetUser());
        }

        return $this->operator[Operator\Users\CheckFollowingForUser::class]->call($username, $targetUser);
    }

    public function listGpgKeysForUser(string $username, int $perPage, int $page): Schema\GpgKey
    {
        if (array_key_exists(Operator\Users\ListGpgKeysForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListGpgKeysForUser::class] = new Operator\Users\ListGpgKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀GpgKeys());
        }

        return $this->operator[Operator\Users\ListGpgKeysForUser::class]->call($username, $perPage, $page);
    }

    public function getContextForUser(string $username, string $subjectType, string $subjectId): Schema\Hovercard
    {
        if (array_key_exists(Operator\Users\GetContextForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\GetContextForUser::class] = new Operator\Users\GetContextForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Hovercard());
        }

        return $this->operator[Operator\Users\GetContextForUser::class]->call($username, $subjectType, $subjectId);
    }

    public function listPublicKeysForUser(string $username, int $perPage, int $page): Schema\KeySimple
    {
        if (array_key_exists(Operator\Users\ListPublicKeysForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListPublicKeysForUser::class] = new Operator\Users\ListPublicKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Keys());
        }

        return $this->operator[Operator\Users\ListPublicKeysForUser::class]->call($username, $perPage, $page);
    }

    public function listSocialAccountsForUser(string $username, int $perPage, int $page): Schema\SocialAccount
    {
        if (array_key_exists(Operator\Users\ListSocialAccountsForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListSocialAccountsForUser::class] = new Operator\Users\ListSocialAccountsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SocialAccounts());
        }

        return $this->operator[Operator\Users\ListSocialAccountsForUser::class]->call($username, $perPage, $page);
    }

    public function listSshSigningKeysForUser(string $username, int $perPage, int $page): Schema\SshSigningKey
    {
        if (array_key_exists(Operator\Users\ListSshSigningKeysForUser::class, $this->operator) === false) {
            $this->operator[Operator\Users\ListSshSigningKeysForUser::class] = new Operator\Users\ListSshSigningKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SshSigningKeys());
        }

        return $this->operator[Operator\Users\ListSshSigningKeysForUser::class]->call($username, $perPage, $page);
    }
}
