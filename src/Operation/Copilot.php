<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails;
use ApiClients\Client\GitHub\Schema\CopilotSeatDetails;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForUsers\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Copilot
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getCopilotOrganizationDetails(string $org): CopilotOrganizationDetails
    {
        return $this->operators->copilot👷GetCopilotOrganizationDetails()->call($org);
    }

    /** @return */
    public function listCopilotSeats(string $org, int $page, int $perPage): Ok
    {
        return $this->operators->copilot👷ListCopilotSeats()->call($org, $page, $perPage);
    }

    /** @return */
    public function addCopilotForBusinessSeatsForTeams(string $org, array $params): Created|WithoutBody
    {
        return $this->operators->copilot👷AddCopilotForBusinessSeatsForTeams()->call($org, $params);
    }

    /** @return */
    public function cancelCopilotSeatAssignmentForTeams(string $org, array $params): \ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->copilot👷CancelCopilotSeatAssignmentForTeams()->call($org, $params);
    }

    /** @return */
    public function addCopilotForBusinessSeatsForUsers(string $org, array $params): Json|WithoutBody
    {
        return $this->operators->copilot👷AddCopilotForBusinessSeatsForUsers()->call($org, $params);
    }

    /** @return */
    public function cancelCopilotSeatAssignmentForUsers(string $org, array $params): \ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok\Application\Json|WithoutBody
    {
        return $this->operators->copilot👷CancelCopilotSeatAssignmentForUsers()->call($org, $params);
    }

    /** @return */
    public function getCopilotSeatDetailsForUser(string $org, string $username): CopilotSeatDetails|WithoutBody
    {
        return $this->operators->copilot👷GetCopilotSeatDetailsForUser()->call($org, $username);
    }
}
