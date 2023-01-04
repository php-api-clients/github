<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Users
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function getAuthenticated() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetAuthenticated($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function updateAuthenticated() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UpdateAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UpdateAuthenticated($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function listBlockedByAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListBlockedByAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListBlockedByAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function checkBlocked(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckBlocked
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckBlocked($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function block(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Block
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Block($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function unblock(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unblock
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unblock($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function setPrimaryEmailVisibilityForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\SetPrimaryEmailVisibilityForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\SetPrimaryEmailVisibilityForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function listEmailsForAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListEmailsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListEmailsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function addEmailForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\AddEmailForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\AddEmailForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function deleteEmailForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteEmailForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteEmailForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function listFollowersForAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function listFollowedByAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowedByAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowedByAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function checkPersonIsFollowedByAuthenticated(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckPersonIsFollowedByAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckPersonIsFollowedByAuthenticated($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function follow(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Follow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Follow($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function unfollow(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unfollow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unfollow($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function listGpgKeysForAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function createGpgKeyForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateGpgKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateGpgKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getGpgKeyForAuthenticatedUser(int $gpg_key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetGpgKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetGpgKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $gpg_key_id);
    }
    public function deleteGpgKeyForAuthenticatedUser(int $gpg_key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteGpgKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteGpgKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $gpg_key_id);
    }
    public function listPublicSshKeysForAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicSshKeysForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicSshKeysForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function createPublicSshKeyForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreatePublicSshKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreatePublicSshKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getPublicSshKeyForAuthenticatedUser(int $key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetPublicSshKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetPublicSshKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $key_id);
    }
    public function deletePublicSshKeyForAuthenticatedUser(int $key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeletePublicSshKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeletePublicSshKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $key_id);
    }
    public function listPublicEmailsForAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicEmailsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicEmailsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function listSshSigningKeysForAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function createSshSigningKeyForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateSshSigningKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateSshSigningKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getSshSigningKeyForAuthenticatedUser(int $ssh_signing_key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetSshSigningKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetSshSigningKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $ssh_signing_key_id);
    }
    public function deleteSshSigningKeyForAuthenticatedUser(int $ssh_signing_key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteSshSigningKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteSshSigningKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $ssh_signing_key_id);
    }
    public function list(int $since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\List
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\List($this->requestSchemaValidator, $this->responseSchemaValidator, $since, $per_page);
    }
    public function getByUsername(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetByUsername
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetByUsername($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function listFollowersForUser(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $per_page, $page);
    }
    public function listFollowingForUser(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowingForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowingForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $per_page, $page);
    }
    public function checkFollowingForUser(string $username, string $target_user) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckFollowingForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckFollowingForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $target_user);
    }
    public function listGpgKeysForUser(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $per_page, $page);
    }
    public function getContextForUser(string $username, string $subject_type, string $subject_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetContextForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetContextForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $subject_type, $subject_id);
    }
    public function listPublicKeysForUser(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicKeysForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicKeysForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $per_page, $page);
    }
    public function listSshSigningKeysForUser(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $per_page, $page);
    }
}
