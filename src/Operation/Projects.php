<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Operators;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Client\GitHub\Schema\Project;
use ApiClients\Client\GitHub\Schema\ProjectCard;
use ApiClients\Client\GitHub\Schema\ProjectCollaboratorPermission;
use ApiClients\Client\GitHub\Schema\ProjectColumn;

final class Projects
{
    public function __construct(private Operators $operators)
    {
    }

    /** @return iterable<Schema\Project> */
    public function listForOrg(string $org, string $state, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListForOrg()->call($org, $state, $perPage, $page);
    }

    /** @return iterable<Schema\Project> */
    public function listForOrgListing(string $org, string $state, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListForOrgListing()->call($org, $state, $perPage, $page);
    }

    /** @return */
    public function createForOrg(string $org, array $params): Project|array
    {
        return $this->operators->projects👷CreateForOrg()->call($org, $params);
    }

    /** @return Schema\ProjectCard|array{code:int} */
    public function getCard(int $cardId): ProjectCard|array
    {
        return $this->operators->projects👷GetCard()->call($cardId);
    }

    /** @return array{code:int} */
    public function deleteCard(int $cardId): array
    {
        return $this->operators->projects👷DeleteCard()->call($cardId);
    }

    /** @return Schema\ProjectCard|array{code:int} */
    public function updateCard(int $cardId, array $params): ProjectCard|array
    {
        return $this->operators->projects👷UpdateCard()->call($cardId, $params);
    }

    /** @return Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json|array{code:int} */
    public function moveCard(int $cardId, array $params): Json|array
    {
        return $this->operators->projects👷MoveCard()->call($cardId, $params);
    }

    /** @return Schema\ProjectColumn|array{code:int} */
    public function getColumn(int $columnId): ProjectColumn|array
    {
        return $this->operators->projects👷GetColumn()->call($columnId);
    }

    /** @return array{code:int} */
    public function deleteColumn(int $columnId): array
    {
        return $this->operators->projects👷DeleteColumn()->call($columnId);
    }

    /** @return Schema\ProjectColumn|array{code:int} */
    public function updateColumn(int $columnId, array $params): ProjectColumn|array
    {
        return $this->operators->projects👷UpdateColumn()->call($columnId, $params);
    }

    /** @return iterable<Schema\ProjectCard>|array{code:int} */
    public function listCards(int $columnId, string $archivedState, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListCards()->call($columnId, $archivedState, $perPage, $page);
    }

    /** @return iterable<Schema\ProjectCard>|array{code:int} */
    public function listCardsListing(int $columnId, string $archivedState, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListCardsListing()->call($columnId, $archivedState, $perPage, $page);
    }

    /** @return Schema\ProjectCard|array{code:int} */
    public function createCard(int $columnId, array $params): ProjectCard|array
    {
        return $this->operators->projects👷CreateCard()->call($columnId, $params);
    }

    /** @return Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json|array{code:int} */
    public function moveColumn(int $columnId, array $params): \ApiClients\Client\GitHub\Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json|array
    {
        return $this->operators->projects👷MoveColumn()->call($columnId, $params);
    }

    /** @return Schema\Project|array{code:int} */
    public function get(int $projectId): Project|array
    {
        return $this->operators->projects👷Get()->call($projectId);
    }

    /** @return array{code:int} */
    public function delete(int $projectId): array
    {
        return $this->operators->projects👷Delete()->call($projectId);
    }

    /** @return Schema\Project|array{code:int} */
    public function update(int $projectId, array $params): Project|array
    {
        return $this->operators->projects👷Update()->call($projectId, $params);
    }

    /** @return iterable<Schema\SimpleUser>|array{code:int} */
    public function listCollaborators(int $projectId, string $affiliation, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListCollaborators()->call($projectId, $affiliation, $perPage, $page);
    }

    /** @return iterable<Schema\SimpleUser>|array{code:int} */
    public function listCollaboratorsListing(int $projectId, string $affiliation, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListCollaboratorsListing()->call($projectId, $affiliation, $perPage, $page);
    }

    /** @return array{code:int} */
    public function addCollaborator(int $projectId, string $username, array $params): array
    {
        return $this->operators->projects👷AddCollaborator()->call($projectId, $username, $params);
    }

    /** @return array{code:int} */
    public function removeCollaborator(int $projectId, string $username): array
    {
        return $this->operators->projects👷RemoveCollaborator()->call($projectId, $username);
    }

    /** @return Schema\ProjectCollaboratorPermission|array{code:int} */
    public function getPermissionForUser(int $projectId, string $username): ProjectCollaboratorPermission|array
    {
        return $this->operators->projects👷GetPermissionForUser()->call($projectId, $username);
    }

    /** @return iterable<Schema\ProjectColumn>|array{code:int} */
    public function listColumns(int $projectId, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListColumns()->call($projectId, $perPage, $page);
    }

    /** @return iterable<Schema\ProjectColumn>|array{code:int} */
    public function listColumnsListing(int $projectId, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListColumnsListing()->call($projectId, $perPage, $page);
    }

    /** @return Schema\ProjectColumn|array{code:int} */
    public function createColumn(int $projectId, array $params): ProjectColumn|array
    {
        return $this->operators->projects👷CreateColumn()->call($projectId, $params);
    }

    /** @return iterable<Schema\Project> */
    public function listForRepo(string $owner, string $repo, string $state, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListForRepo()->call($owner, $repo, $state, $perPage, $page);
    }

    /** @return iterable<Schema\Project> */
    public function listForRepoListing(string $owner, string $repo, string $state, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListForRepoListing()->call($owner, $repo, $state, $perPage, $page);
    }

    /** @return */
    public function createForRepo(string $owner, string $repo, array $params): Project|array
    {
        return $this->operators->projects👷CreateForRepo()->call($owner, $repo, $params);
    }

    /** @return Schema\Project|array{code:int} */
    public function createForAuthenticatedUser(array $params): Project|array
    {
        return $this->operators->projects👷CreateForAuthenticatedUser()->call($params);
    }

    /** @return iterable<Schema\Project> */
    public function listForUser(string $username, string $state, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListForUser()->call($username, $state, $perPage, $page);
    }

    /** @return iterable<Schema\Project> */
    public function listForUserListing(string $username, string $state, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListForUserListing()->call($username, $state, $perPage, $page);
    }
}
