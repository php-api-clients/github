<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Projects
{
    public function listForOrg_($org, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListForOrg_($org, $state, $per_page, $page);
    }
    public function createForOrg_($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateForOrg_($org);
    }
    public function getCard_($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetCard_($card_id);
    }
    public function deleteCard_($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\DeleteCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\DeleteCard_($card_id);
    }
    public function updateCard_($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\UpdateCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\UpdateCard_($card_id);
    }
    public function moveCard_($card_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\MoveCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\MoveCard_($card_id);
    }
    public function getColumn_($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetColumn_($column_id);
    }
    public function deleteColumn_($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\DeleteColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\DeleteColumn_($column_id);
    }
    public function updateColumn_($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\UpdateColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\UpdateColumn_($column_id);
    }
    public function listCards_($column_id, string $archived_state = 'not_archived', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListCards_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListCards_($column_id, $archived_state, $per_page, $page);
    }
    public function createCard_($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateCard_($column_id);
    }
    public function moveColumn_($column_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\MoveColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\MoveColumn_($column_id);
    }
    public function get_($project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\Get_($project_id);
    }
    public function delete_($project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\Delete_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\Delete_($project_id);
    }
    public function update_($project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\Update_($project_id);
    }
    public function listCollaborators_($project_id, string $affiliation = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListCollaborators_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListCollaborators_($project_id, $affiliation, $per_page, $page);
    }
    public function addCollaborator_($project_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\AddCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\AddCollaborator_($project_id, $username);
    }
    public function removeCollaborator_($project_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\RemoveCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\RemoveCollaborator_($project_id, $username);
    }
    public function getPermissionForUser_($project_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetPermissionForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetPermissionForUser_($project_id, $username);
    }
    public function listColumns_($project_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListColumns_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListColumns_($project_id, $per_page, $page);
    }
    public function createColumn_($project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateColumn_($project_id);
    }
    public function listForRepo_($owner, $repo, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListForRepo_($owner, $repo, $state, $per_page, $page);
    }
    public function createForRepo_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateForRepo_($owner, $repo);
    }
    public function createForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateForAuthenticatedUser_();
    }
    public function listForUser_($username, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListForUser_($username, $state, $per_page, $page);
    }
}
