<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;
use React\Promise\PromiseInterface;

use function array_key_exists;

final class Projects
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listForOrg(string $org, string $state, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\ListForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Projects\ListForOrg::class] = new Operator\Projects\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());
        }

        return $this->operator[Operator\Projects\ListForOrg::class]->call($org, $state, $perPage, $page);
    }

    public function createForOrg(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\CreateForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Projects\CreateForOrg::class] = new Operator\Projects\CreateForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());
        }

        return $this->operator[Operator\Projects\CreateForOrg::class]->call($org, $params);
    }

    public function getCard(int $cardId): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\GetCard::class, $this->operator) === false) {
            $this->operator[Operator\Projects\GetCard::class] = new Operator\Projects\GetCard($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->operator[Operator\Projects\GetCard::class]->call($cardId);
    }

    public function deleteCard(int $cardId): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\DeleteCard::class, $this->operator) === false) {
            $this->operator[Operator\Projects\DeleteCard::class] = new Operator\Projects\DeleteCard($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->operator[Operator\Projects\DeleteCard::class]->call($cardId);
    }

    public function updateCard(int $cardId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\UpdateCard::class, $this->operator) === false) {
            $this->operator[Operator\Projects\UpdateCard::class] = new Operator\Projects\UpdateCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->operator[Operator\Projects\UpdateCard::class]->call($cardId, $params);
    }

    public function moveCard(int $cardId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\MoveCard::class, $this->operator) === false) {
            $this->operator[Operator\Projects\MoveCard::class] = new Operator\Projects\MoveCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves());
        }

        return $this->operator[Operator\Projects\MoveCard::class]->call($cardId, $params);
    }

    public function getColumn(int $columnId): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\GetColumn::class, $this->operator) === false) {
            $this->operator[Operator\Projects\GetColumn::class] = new Operator\Projects\GetColumn($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->operator[Operator\Projects\GetColumn::class]->call($columnId);
    }

    public function deleteColumn(int $columnId): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\DeleteColumn::class, $this->operator) === false) {
            $this->operator[Operator\Projects\DeleteColumn::class] = new Operator\Projects\DeleteColumn($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->operator[Operator\Projects\DeleteColumn::class]->call($columnId);
    }

    public function updateColumn(int $columnId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\UpdateColumn::class, $this->operator) === false) {
            $this->operator[Operator\Projects\UpdateColumn::class] = new Operator\Projects\UpdateColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->operator[Operator\Projects\UpdateColumn::class]->call($columnId, $params);
    }

    public function listCards(int $columnId, string $archivedState, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\ListCards::class, $this->operator) === false) {
            $this->operator[Operator\Projects\ListCards::class] = new Operator\Projects\ListCards($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());
        }

        return $this->operator[Operator\Projects\ListCards::class]->call($columnId, $archivedState, $perPage, $page);
    }

    public function createCard(int $columnId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\CreateCard::class, $this->operator) === false) {
            $this->operator[Operator\Projects\CreateCard::class] = new Operator\Projects\CreateCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());
        }

        return $this->operator[Operator\Projects\CreateCard::class]->call($columnId, $params);
    }

    public function moveColumn(int $columnId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\MoveColumn::class, $this->operator) === false) {
            $this->operator[Operator\Projects\MoveColumn::class] = new Operator\Projects\MoveColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves());
        }

        return $this->operator[Operator\Projects\MoveColumn::class]->call($columnId, $params);
    }

    public function get(int $projectId): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\Get::class, $this->operator) === false) {
            $this->operator[Operator\Projects\Get::class] = new Operator\Projects\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->operator[Operator\Projects\Get::class]->call($projectId);
    }

    public function delete(int $projectId): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\Delete::class, $this->operator) === false) {
            $this->operator[Operator\Projects\Delete::class] = new Operator\Projects\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->operator[Operator\Projects\Delete::class]->call($projectId);
    }

    public function update(int $projectId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\Update::class, $this->operator) === false) {
            $this->operator[Operator\Projects\Update::class] = new Operator\Projects\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->operator[Operator\Projects\Update::class]->call($projectId, $params);
    }

    public function listCollaborators(int $projectId, string $affiliation, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\ListCollaborators::class, $this->operator) === false) {
            $this->operator[Operator\Projects\ListCollaborators::class] = new Operator\Projects\ListCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators());
        }

        return $this->operator[Operator\Projects\ListCollaborators::class]->call($projectId, $affiliation, $perPage, $page);
    }

    public function addCollaborator(int $projectId, string $username, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\AddCollaborator::class, $this->operator) === false) {
            $this->operator[Operator\Projects\AddCollaborator::class] = new Operator\Projects\AddCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username());
        }

        return $this->operator[Operator\Projects\AddCollaborator::class]->call($projectId, $username, $params);
    }

    public function removeCollaborator(int $projectId, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\RemoveCollaborator::class, $this->operator) === false) {
            $this->operator[Operator\Projects\RemoveCollaborator::class] = new Operator\Projects\RemoveCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username());
        }

        return $this->operator[Operator\Projects\RemoveCollaborator::class]->call($projectId, $username);
    }

    public function getPermissionForUser(int $projectId, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\GetPermissionForUser::class, $this->operator) === false) {
            $this->operator[Operator\Projects\GetPermissionForUser::class] = new Operator\Projects\GetPermissionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission());
        }

        return $this->operator[Operator\Projects\GetPermissionForUser::class]->call($projectId, $username);
    }

    public function listColumns(int $projectId, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\ListColumns::class, $this->operator) === false) {
            $this->operator[Operator\Projects\ListColumns::class] = new Operator\Projects\ListColumns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());
        }

        return $this->operator[Operator\Projects\ListColumns::class]->call($projectId, $perPage, $page);
    }

    public function createColumn(int $projectId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\CreateColumn::class, $this->operator) === false) {
            $this->operator[Operator\Projects\CreateColumn::class] = new Operator\Projects\CreateColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());
        }

        return $this->operator[Operator\Projects\CreateColumn::class]->call($projectId, $params);
    }

    public function listForRepo(string $owner, string $repo, string $state, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\ListForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Projects\ListForRepo::class] = new Operator\Projects\ListForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());
        }

        return $this->operator[Operator\Projects\ListForRepo::class]->call($owner, $repo, $state, $perPage, $page);
    }

    public function createForRepo(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\CreateForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Projects\CreateForRepo::class] = new Operator\Projects\CreateForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());
        }

        return $this->operator[Operator\Projects\CreateForRepo::class]->call($owner, $repo, $params);
    }

    public function createForAuthenticatedUser(array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\CreateForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Projects\CreateForAuthenticatedUser::class] = new Operator\Projects\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Projects());
        }

        return $this->operator[Operator\Projects\CreateForAuthenticatedUser::class]->call($params);
    }

    public function listForUser(string $username, string $state, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Projects\ListForUser::class, $this->operator) === false) {
            $this->operator[Operator\Projects\ListForUser::class] = new Operator\Projects\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Projects());
        }

        return $this->operator[Operator\Projects\ListForUser::class]->call($username, $state, $perPage, $page);
    }
}
