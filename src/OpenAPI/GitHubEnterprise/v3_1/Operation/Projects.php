<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class Projects
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function listForOrg_(string $org, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $state, $per_page, $page);
    }
    public function createForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getCard_(int $card_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\GetCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\GetCard_($this->requestSchemaValidator, $this->responseSchemaValidator, $card_id);
    }
    public function deleteCard_(int $card_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\DeleteCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\DeleteCard_($this->requestSchemaValidator, $this->responseSchemaValidator, $card_id);
    }
    public function updateCard_(int $card_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\UpdateCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\UpdateCard_($this->requestSchemaValidator, $this->responseSchemaValidator, $card_id);
    }
    public function moveCard_(int $card_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\MoveCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\MoveCard_($this->requestSchemaValidator, $this->responseSchemaValidator, $card_id);
    }
    public function getColumn_(int $column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\GetColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\GetColumn_($this->requestSchemaValidator, $this->responseSchemaValidator, $column_id);
    }
    public function deleteColumn_(int $column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\DeleteColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\DeleteColumn_($this->requestSchemaValidator, $this->responseSchemaValidator, $column_id);
    }
    public function updateColumn_(int $column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\UpdateColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\UpdateColumn_($this->requestSchemaValidator, $this->responseSchemaValidator, $column_id);
    }
    public function listCards_(int $column_id, string $archived_state = 'not_archived', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListCards_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListCards_($this->requestSchemaValidator, $this->responseSchemaValidator, $column_id, $archived_state, $per_page, $page);
    }
    public function createCard_(int $column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateCard_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateCard_($this->requestSchemaValidator, $this->responseSchemaValidator, $column_id);
    }
    public function moveColumn_(int $column_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\MoveColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\MoveColumn_($this->requestSchemaValidator, $this->responseSchemaValidator, $column_id);
    }
    public function get_(int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Get_($this->requestSchemaValidator, $this->responseSchemaValidator, $project_id);
    }
    public function delete_(int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Delete_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Delete_($this->requestSchemaValidator, $this->responseSchemaValidator, $project_id);
    }
    public function update_(int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\Update_($this->requestSchemaValidator, $this->responseSchemaValidator, $project_id);
    }
    public function listCollaborators_(int $project_id, string $affiliation = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListCollaborators_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListCollaborators_($this->requestSchemaValidator, $this->responseSchemaValidator, $project_id, $affiliation, $per_page, $page);
    }
    public function addCollaborator_(int $project_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\AddCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\AddCollaborator_($this->requestSchemaValidator, $this->responseSchemaValidator, $project_id, $username);
    }
    public function removeCollaborator_(int $project_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\RemoveCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\RemoveCollaborator_($this->requestSchemaValidator, $this->responseSchemaValidator, $project_id, $username);
    }
    public function getPermissionForUser_(int $project_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\GetPermissionForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\GetPermissionForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $project_id, $username);
    }
    public function listColumns_(int $project_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListColumns_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListColumns_($this->requestSchemaValidator, $this->responseSchemaValidator, $project_id, $per_page, $page);
    }
    public function createColumn_(int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateColumn_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateColumn_($this->requestSchemaValidator, $this->responseSchemaValidator, $project_id);
    }
    public function listForRepo_(string $owner, string $repo, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $state, $per_page, $page);
    }
    public function createForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function createForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function listForUser_(string $username, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $state, $per_page, $page);
    }
}
