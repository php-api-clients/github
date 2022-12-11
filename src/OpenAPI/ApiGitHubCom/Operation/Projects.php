<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Projects
{
    public function listForOrg_(string $org, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForOrg_($org, $state, $per_page, $page);
    }
    public function createForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForOrg_($org);
    }
    public function getCard_(int $card_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetCard_($card_id);
    }
    public function deleteCard_(int $card_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteCard_($card_id);
    }
    public function updateCard_(int $card_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateCard_($card_id);
    }
    public function moveCard_(int $card_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveCard_($card_id);
    }
    public function getColumn_(int $column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetColumn_($column_id);
    }
    public function deleteColumn_(int $column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteColumn_($column_id);
    }
    public function updateColumn_(int $column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateColumn_($column_id);
    }
    public function listCards_(int $column_id, string $archived_state = 'not_archived', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCards_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCards_($column_id, $archived_state, $per_page, $page);
    }
    public function createCard_(int $column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateCard_($column_id);
    }
    public function moveColumn_(int $column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveColumn_($column_id);
    }
    public function get_(int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Get_($project_id);
    }
    public function delete_(int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Delete_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Delete_($project_id);
    }
    public function update_(int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Update_($project_id);
    }
    public function listCollaborators_(int $project_id, string $affiliation = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCollaborators_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCollaborators_($project_id, $affiliation, $per_page, $page);
    }
    public function addCollaborator_(int $project_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\AddCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\AddCollaborator_($project_id, $username);
    }
    public function removeCollaborator_(int $project_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\RemoveCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\RemoveCollaborator_($project_id, $username);
    }
    public function getPermissionForUser_(int $project_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetPermissionForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetPermissionForUser_($project_id, $username);
    }
    public function listColumns_(int $project_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListColumns_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListColumns_($project_id, $per_page, $page);
    }
    public function createColumn_(int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateColumn_($project_id);
    }
    public function listForRepo_(string $owner, string $repo, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForRepo_($owner, $repo, $state, $per_page, $page);
    }
    public function createForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForRepo_($owner, $repo);
    }
    public function createForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForAuthenticatedUser_();
    }
    public function listForUser_(string $username, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForUser_($username, $state, $per_page, $page);
    }
}
