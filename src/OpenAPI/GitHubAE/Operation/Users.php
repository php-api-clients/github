<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Users
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function getAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetAuthenticated_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function updateAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\UpdateAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\UpdateAuthenticated_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function listFollowersForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowersForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowersForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function listFollowedByAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowedByAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowedByAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function checkPersonIsFollowedByAuthenticated_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckPersonIsFollowedByAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckPersonIsFollowedByAuthenticated_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function follow_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Follow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Follow_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function unfollow_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Unfollow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Unfollow_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function listGpgKeysForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function createGpgKeyForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreateGpgKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreateGpgKeyForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getGpgKeyForAuthenticatedUser_(int $gpg_key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetGpgKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetGpgKeyForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $gpg_key_id);
    }
    public function deleteGpgKeyForAuthenticatedUser_(int $gpg_key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeleteGpgKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeleteGpgKeyForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $gpg_key_id);
    }
    public function listPublicSshKeysForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListPublicSshKeysForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListPublicSshKeysForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function createPublicSshKeyForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreatePublicSshKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreatePublicSshKeyForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getPublicSshKeyForAuthenticatedUser_(int $key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetPublicSshKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetPublicSshKeyForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $key_id);
    }
    public function deletePublicSshKeyForAuthenticatedUser_(int $key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeletePublicSshKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeletePublicSshKeyForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $key_id);
    }
    public function list_(int $since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\List_($this->requestSchemaValidator, $this->responseSchemaValidator, $since, $per_page);
    }
    public function getByUsername_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetByUsername_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetByUsername_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function listFollowersForUser_(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowersForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowersForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $per_page, $page);
    }
    public function listFollowingForUser_(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowingForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowingForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $per_page, $page);
    }
    public function checkFollowingForUser_(string $username, string $target_user) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckFollowingForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckFollowingForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $target_user);
    }
    public function listGpgKeysForUser_(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $per_page, $page);
    }
    public function getContextForUser_(string $username, string $subject_type, string $subject_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetContextForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetContextForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $subject_type, $subject_id);
    }
    public function listPublicKeysForUser_(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListPublicKeysForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListPublicKeysForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $per_page, $page);
    }
}
