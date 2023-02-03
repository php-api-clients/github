<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Projects
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function listForOrg(string $org, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $state, $per_page, $page);
    }
    public function createForOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function getCard(int $card_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetCard
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetCard($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $card_id);
    }
    public function deleteCard(int $card_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteCard
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteCard($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $card_id);
    }
    public function updateCard(int $card_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateCard
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateCard($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $card_id);
    }
    public function moveCard(int $card_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveCard
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveCard($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $card_id);
    }
    public function getColumn(int $column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetColumn($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $column_id);
    }
    public function deleteColumn(int $column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\DeleteColumn($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $column_id);
    }
    public function updateColumn(int $column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\UpdateColumn($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $column_id);
    }
    public function listCards(int $column_id, string $archived_state = 'not_archived', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCards
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCards($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $column_id, $archived_state, $per_page, $page);
    }
    public function createCard(int $column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateCard
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateCard($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $column_id);
    }
    public function moveColumn(int $column_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\MoveColumn($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $column_id);
    }
    public function get(int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Get($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $project_id);
    }
    public function delete(int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Delete
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Delete($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $project_id);
    }
    public function update(int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $project_id);
    }
    public function listCollaborators(int $project_id, string $affiliation = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCollaborators
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListCollaborators($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $project_id, $affiliation, $per_page, $page);
    }
    public function addCollaborator(int $project_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\AddCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\AddCollaborator($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $project_id, $username);
    }
    public function removeCollaborator(int $project_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\RemoveCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\RemoveCollaborator($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $project_id, $username);
    }
    public function getPermissionForUser(int $project_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetPermissionForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetPermissionForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $project_id, $username);
    }
    public function listColumns(int $project_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListColumns
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListColumns($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $project_id, $per_page, $page);
    }
    public function createColumn(int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateColumn
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateColumn($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $project_id);
    }
    public function listForRepo(string $owner, string $repo, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $state, $per_page, $page);
    }
    public function createForRepo(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function createForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function listForUser(string $username, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username, $state, $per_page, $page);
    }
}
