<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Users
{
    public function getAuthenticated_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetAuthenticated_();
    }
    public function updateAuthenticated_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UpdateAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UpdateAuthenticated_();
    }
    public function listBlockedByAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListBlockedByAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListBlockedByAuthenticatedUser_($per_page, $page);
    }
    public function checkBlocked_(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckBlocked_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckBlocked_($username);
    }
    public function block_(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Block_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Block_($username);
    }
    public function unblock_(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unblock_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unblock_($username);
    }
    public function setPrimaryEmailVisibilityForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\SetPrimaryEmailVisibilityForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\SetPrimaryEmailVisibilityForAuthenticatedUser_();
    }
    public function listEmailsForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListEmailsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListEmailsForAuthenticatedUser_($per_page, $page);
    }
    public function addEmailForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\AddEmailForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\AddEmailForAuthenticatedUser_();
    }
    public function deleteEmailForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteEmailForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteEmailForAuthenticatedUser_();
    }
    public function listFollowersForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForAuthenticatedUser_($per_page, $page);
    }
    public function listFollowedByAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowedByAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowedByAuthenticatedUser_($per_page, $page);
    }
    public function checkPersonIsFollowedByAuthenticated_(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckPersonIsFollowedByAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckPersonIsFollowedByAuthenticated_($username);
    }
    public function follow_(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Follow_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Follow_($username);
    }
    public function unfollow_(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unfollow_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unfollow_($username);
    }
    public function listGpgKeysForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForAuthenticatedUser_($per_page, $page);
    }
    public function createGpgKeyForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateGpgKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateGpgKeyForAuthenticatedUser_();
    }
    public function getGpgKeyForAuthenticatedUser_(int $gpg_key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetGpgKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetGpgKeyForAuthenticatedUser_($gpg_key_id);
    }
    public function deleteGpgKeyForAuthenticatedUser_(int $gpg_key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteGpgKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteGpgKeyForAuthenticatedUser_($gpg_key_id);
    }
    public function listPublicSshKeysForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicSshKeysForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicSshKeysForAuthenticatedUser_($per_page, $page);
    }
    public function createPublicSshKeyForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreatePublicSshKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreatePublicSshKeyForAuthenticatedUser_();
    }
    public function getPublicSshKeyForAuthenticatedUser_(int $key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetPublicSshKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetPublicSshKeyForAuthenticatedUser_($key_id);
    }
    public function deletePublicSshKeyForAuthenticatedUser_(int $key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeletePublicSshKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeletePublicSshKeyForAuthenticatedUser_($key_id);
    }
    public function listPublicEmailsForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicEmailsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicEmailsForAuthenticatedUser_($per_page, $page);
    }
    public function listSshSigningKeysForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForAuthenticatedUser_($per_page, $page);
    }
    public function createSshSigningKeyForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateSshSigningKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CreateSshSigningKeyForAuthenticatedUser_();
    }
    public function getSshSigningKeyForAuthenticatedUser_(int $ssh_signing_key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetSshSigningKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetSshSigningKeyForAuthenticatedUser_($ssh_signing_key_id);
    }
    public function deleteSshSigningKeyForAuthenticatedUser_(int $ssh_signing_key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteSshSigningKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\DeleteSshSigningKeyForAuthenticatedUser_($ssh_signing_key_id);
    }
    public function list_(int $since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\List_($since, $per_page);
    }
    public function getByUsername_(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetByUsername_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetByUsername_($username);
    }
    public function listFollowersForUser_(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowersForUser_($username, $per_page, $page);
    }
    public function listFollowingForUser_(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowingForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowingForUser_($username, $per_page, $page);
    }
    public function checkFollowingForUser_(string $username, string $target_user) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckFollowingForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckFollowingForUser_($username, $target_user);
    }
    public function listGpgKeysForUser_(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForUser_($username, $per_page, $page);
    }
    public function getContextForUser_(string $username, string $subject_type, string $subject_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetContextForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetContextForUser_($username, $subject_type, $subject_id);
    }
    public function listPublicKeysForUser_(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicKeysForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListPublicKeysForUser_($username, $per_page, $page);
    }
    public function listSshSigningKeysForUser_(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListSshSigningKeysForUser_($username, $per_page, $page);
    }
}
