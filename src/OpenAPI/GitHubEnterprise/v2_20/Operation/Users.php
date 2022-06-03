<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation;

final class Users
{
    public function getAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\GetAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\GetAuthenticated_();
    }
    public function updateAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\UpdateAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\UpdateAuthenticated_();
    }
    public function listEmailsForAuthenticated_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListEmailsForAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListEmailsForAuthenticated_($per_page, $page);
    }
    public function addEmailForAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\AddEmailForAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\AddEmailForAuthenticated_();
    }
    public function deleteEmailForAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\DeleteEmailForAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\DeleteEmailForAuthenticated_();
    }
    public function listFollowersForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListFollowersForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListFollowersForAuthenticatedUser_($per_page, $page);
    }
    public function listFollowedByAuthenticated_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListFollowedByAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListFollowedByAuthenticated_($per_page, $page);
    }
    public function checkPersonIsFollowedByAuthenticated_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CheckPersonIsFollowedByAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CheckPersonIsFollowedByAuthenticated_($username);
    }
    public function follow_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\Follow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\Follow_($username);
    }
    public function unfollow_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\Unfollow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\Unfollow_($username);
    }
    public function listGpgKeysForAuthenticated_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListGpgKeysForAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListGpgKeysForAuthenticated_($per_page, $page);
    }
    public function createGpgKeyForAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CreateGpgKeyForAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CreateGpgKeyForAuthenticated_();
    }
    public function getGpgKeyForAuthenticated_($gpg_key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\GetGpgKeyForAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\GetGpgKeyForAuthenticated_($gpg_key_id);
    }
    public function deleteGpgKeyForAuthenticated_($gpg_key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\DeleteGpgKeyForAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\DeleteGpgKeyForAuthenticated_($gpg_key_id);
    }
    public function listPublicSshKeysForAuthenticated_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListPublicSshKeysForAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListPublicSshKeysForAuthenticated_($per_page, $page);
    }
    public function createPublicSshKeyForAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CreatePublicSshKeyForAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CreatePublicSshKeyForAuthenticated_();
    }
    public function getPublicSshKeyForAuthenticated_($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\GetPublicSshKeyForAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\GetPublicSshKeyForAuthenticated_($key_id);
    }
    public function deletePublicSshKeyForAuthenticated_($key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\DeletePublicSshKeyForAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\DeletePublicSshKeyForAuthenticated_($key_id);
    }
    public function listPublicEmailsForAuthenticated_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListPublicEmailsForAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListPublicEmailsForAuthenticated_($per_page, $page);
    }
    public function list_($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\List_($since, $per_page);
    }
    public function getByUsername_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\GetByUsername_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\GetByUsername_($username);
    }
    public function listFollowersForUser_($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListFollowersForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListFollowersForUser_($username, $per_page, $page);
    }
    public function listFollowingForUser_($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListFollowingForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListFollowingForUser_($username, $per_page, $page);
    }
    public function checkFollowingForUser_($username, $target_user) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CheckFollowingForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CheckFollowingForUser_($username, $target_user);
    }
    public function listGpgKeysForUser_($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListGpgKeysForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListGpgKeysForUser_($username, $per_page, $page);
    }
    public function getContextForUser_($username, $subject_type, $subject_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\GetContextForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\GetContextForUser_($username, $subject_type, $subject_id);
    }
    public function listPublicKeysForUser_($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListPublicKeysForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\ListPublicKeysForUser_($username, $per_page, $page);
    }
}
