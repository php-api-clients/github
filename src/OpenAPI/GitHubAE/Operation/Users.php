<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Users
{
    public function getAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetAuthenticated_();
    }
    public function updateAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\UpdateAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\UpdateAuthenticated_();
    }
    public function listFollowersForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowersForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowersForAuthenticatedUser_($per_page, $page);
    }
    public function listFollowedByAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowedByAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowedByAuthenticatedUser_($per_page, $page);
    }
    public function checkPersonIsFollowedByAuthenticated_($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckPersonIsFollowedByAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckPersonIsFollowedByAuthenticated_($username);
    }
    public function follow_($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Follow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Follow_($username);
    }
    public function unfollow_($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Unfollow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Unfollow_($username);
    }
    public function listGpgKeysForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForAuthenticatedUser_($per_page, $page);
    }
    public function createGpgKeyForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreateGpgKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreateGpgKeyForAuthenticatedUser_();
    }
    public function getGpgKeyForAuthenticatedUser_($gpg_key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetGpgKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetGpgKeyForAuthenticatedUser_($gpg_key_id);
    }
    public function deleteGpgKeyForAuthenticatedUser_($gpg_key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeleteGpgKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeleteGpgKeyForAuthenticatedUser_($gpg_key_id);
    }
    public function listPublicSshKeysForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListPublicSshKeysForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListPublicSshKeysForAuthenticatedUser_($per_page, $page);
    }
    public function createPublicSshKeyForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreatePublicSshKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreatePublicSshKeyForAuthenticatedUser_();
    }
    public function getPublicSshKeyForAuthenticatedUser_($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetPublicSshKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetPublicSshKeyForAuthenticatedUser_($key_id);
    }
    public function deletePublicSshKeyForAuthenticatedUser_($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeletePublicSshKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\DeletePublicSshKeyForAuthenticatedUser_($key_id);
    }
    public function list_($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\List_($since, $per_page);
    }
    public function getByUsername_($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetByUsername_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetByUsername_($username);
    }
    public function listFollowersForUser_($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowersForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowersForUser_($username, $per_page, $page);
    }
    public function listFollowingForUser_($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowingForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowingForUser_($username, $per_page, $page);
    }
    public function checkFollowingForUser_($username, $target_user) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckFollowingForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckFollowingForUser_($username, $target_user);
    }
    public function listGpgKeysForUser_($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListGpgKeysForUser_($username, $per_page, $page);
    }
    public function getContextForUser_($username, $subject_type, $subject_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetContextForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetContextForUser_($username, $subject_type, $subject_id);
    }
    public function listPublicKeysForUser_($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListPublicKeysForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListPublicKeysForUser_($username, $per_page, $page);
    }
}
