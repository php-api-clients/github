<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Client\GitHub\Schema\Project;
use ApiClients\Client\GitHub\Schema\ProjectCard;
use ApiClients\Client\GitHub\Schema\ProjectCollaboratorPermission;
use ApiClients\Client\GitHub\Schema\ProjectColumn;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Projects
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<int,Schema\Project> */
    public function listForOrg(string $org, string $state, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListForOrg()->call($org, $state, $perPage, $page);
    }

    /** @return iterable<int,Schema\Project> */
    public function listForOrgListing(string $org, string $state, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListForOrgListing()->call($org, $state, $perPage, $page);
    }

    /** @return */
    public function createForOrg(string $org, array $params): Project
    {
        return $this->operators->projects👷CreateForOrg()->call($org, $params);
    }

    /** @return */
    public function getCard(int $cardId): ProjectCard|WithoutBody
    {
        return $this->operators->projects👷GetCard()->call($cardId);
    }

    /** @return */
    public function deleteCard(int $cardId): WithoutBody
    {
        return $this->operators->projects👷DeleteCard()->call($cardId);
    }

    /** @return */
    public function updateCard(int $cardId, array $params): ProjectCard|WithoutBody
    {
        return $this->operators->projects👷UpdateCard()->call($cardId, $params);
    }

    /** @return */
    public function moveCard(int $cardId, array $params): Json|WithoutBody
    {
        return $this->operators->projects👷MoveCard()->call($cardId, $params);
    }

    /** @return */
    public function getColumn(int $columnId): ProjectColumn|WithoutBody
    {
        return $this->operators->projects👷GetColumn()->call($columnId);
    }

    /** @return */
    public function deleteColumn(int $columnId): WithoutBody
    {
        return $this->operators->projects👷DeleteColumn()->call($columnId);
    }

    /** @return */
    public function updateColumn(int $columnId, array $params): ProjectColumn|WithoutBody
    {
        return $this->operators->projects👷UpdateColumn()->call($columnId, $params);
    }

    /** @return iterable<int,Schema\ProjectCard>|WithoutBody */
    public function listCards(int $columnId, string $archivedState, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->projects👷ListCards()->call($columnId, $archivedState, $perPage, $page);
    }

    /** @return iterable<int,Schema\ProjectCard>|WithoutBody */
    public function listCardsListing(int $columnId, string $archivedState, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->projects👷ListCardsListing()->call($columnId, $archivedState, $perPage, $page);
    }

    /** @return */
    public function createCard(int $columnId, array $params): ProjectCard|WithoutBody
    {
        return $this->operators->projects👷CreateCard()->call($columnId, $params);
    }

    /** @return */
    public function moveColumn(int $columnId, array $params): \ApiClients\Client\GitHub\Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json|WithoutBody
    {
        return $this->operators->projects👷MoveColumn()->call($columnId, $params);
    }

    /** @return */
    public function get(int $projectId): Project|WithoutBody
    {
        return $this->operators->projects👷Get()->call($projectId);
    }

    /** @return */
    public function delete(int $projectId): WithoutBody
    {
        return $this->operators->projects👷Delete()->call($projectId);
    }

    /** @return */
    public function update(int $projectId, array $params): Project|WithoutBody
    {
        return $this->operators->projects👷Update()->call($projectId, $params);
    }

    /** @return iterable<int,Schema\SimpleUser>|WithoutBody */
    public function listCollaborators(int $projectId, string $affiliation, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->projects👷ListCollaborators()->call($projectId, $affiliation, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser>|WithoutBody */
    public function listCollaboratorsListing(int $projectId, string $affiliation, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->projects👷ListCollaboratorsListing()->call($projectId, $affiliation, $perPage, $page);
    }

    /** @return */
    public function addCollaborator(int $projectId, string $username, array $params): WithoutBody
    {
        return $this->operators->projects👷AddCollaborator()->call($projectId, $username, $params);
    }

    /** @return */
    public function removeCollaborator(int $projectId, string $username): WithoutBody
    {
        return $this->operators->projects👷RemoveCollaborator()->call($projectId, $username);
    }

    /** @return */
    public function getPermissionForUser(int $projectId, string $username): ProjectCollaboratorPermission|WithoutBody
    {
        return $this->operators->projects👷GetPermissionForUser()->call($projectId, $username);
    }

    /** @return iterable<int,Schema\ProjectColumn>|WithoutBody */
    public function listColumns(int $projectId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->projects👷ListColumns()->call($projectId, $perPage, $page);
    }

    /** @return iterable<int,Schema\ProjectColumn>|WithoutBody */
    public function listColumnsListing(int $projectId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->projects👷ListColumnsListing()->call($projectId, $perPage, $page);
    }

    /** @return */
    public function createColumn(int $projectId, array $params): ProjectColumn|WithoutBody
    {
        return $this->operators->projects👷CreateColumn()->call($projectId, $params);
    }

    /** @return iterable<int,Schema\Project> */
    public function listForRepo(string $owner, string $repo, string $state, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListForRepo()->call($owner, $repo, $state, $perPage, $page);
    }

    /** @return iterable<int,Schema\Project> */
    public function listForRepoListing(string $owner, string $repo, string $state, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListForRepoListing()->call($owner, $repo, $state, $perPage, $page);
    }

    /** @return */
    public function createForRepo(string $owner, string $repo, array $params): Project
    {
        return $this->operators->projects👷CreateForRepo()->call($owner, $repo, $params);
    }

    /** @return */
    public function createForAuthenticatedUser(array $params): Project|WithoutBody
    {
        return $this->operators->projects👷CreateForAuthenticatedUser()->call($params);
    }

    /** @return iterable<int,Schema\Project> */
    public function listForUser(string $username, string $state, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListForUser()->call($username, $state, $perPage, $page);
    }

    /** @return iterable<int,Schema\Project> */
    public function listForUserListing(string $username, string $state, int $perPage, int $page): iterable
    {
        return $this->operators->projects👷ListForUserListing()->call($username, $state, $perPage, $page);
    }
}
