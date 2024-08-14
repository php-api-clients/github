<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails;
use ApiClients\Client\GitHub\Schema\CopilotSeatDetails;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForTeams\Response\ApplicationJson\Created;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForUsers\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeatsForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Copilot
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function listCopilotSeatsForEnterprise(string $enterprise, int $page, int $perPage): Ok
    {
        return $this->operators->copilot👷ListCopilotSeatsForEnterprise()->call($enterprise, $page, $perPage);
    }

    /** @return Observable<Schema\CopilotUsageMetrics> */
    public function usageMetricsForEnterprise(string $enterprise, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷UsageMetricsForEnterprise()->call($enterprise, $since, $until, $page, $perPage);
    }

    /** @return Observable<Schema\CopilotUsageMetrics> */
    public function usageMetricsForEnterpriseListing(string $enterprise, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷UsageMetricsForEnterpriseListing()->call($enterprise, $since, $until, $page, $perPage);
    }

    /** @return Observable<Schema\CopilotUsageMetrics> */
    public function usageMetricsForEnterpriseTeam(string $enterprise, string $teamSlug, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷UsageMetricsForEnterpriseTeam()->call($enterprise, $teamSlug, $since, $until, $page, $perPage);
    }

    /** @return Observable<Schema\CopilotUsageMetrics> */
    public function usageMetricsForEnterpriseTeamListing(string $enterprise, string $teamSlug, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷UsageMetricsForEnterpriseTeamListing()->call($enterprise, $teamSlug, $since, $until, $page, $perPage);
    }

    /** @return */
    public function getCopilotOrganizationDetails(string $org): CopilotOrganizationDetails|WithoutBody
    {
        return $this->operators->copilot👷GetCopilotOrganizationDetails()->call($org);
    }

    /** @return */
    public function listCopilotSeats(string $org, int $page, int $perPage): \ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok
    {
        return $this->operators->copilot👷ListCopilotSeats()->call($org, $page, $perPage);
    }

    /** @return */
    public function addCopilotSeatsForTeams(string $org, array $params): Created|WithoutBody
    {
        return $this->operators->copilot👷AddCopilotSeatsForTeams()->call($org, $params);
    }

    /** @return */
    public function cancelCopilotSeatAssignmentForTeams(string $org, array $params): \ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->copilot👷CancelCopilotSeatAssignmentForTeams()->call($org, $params);
    }

    /** @return */
    public function addCopilotSeatsForUsers(string $org, array $params): Json|WithoutBody
    {
        return $this->operators->copilot👷AddCopilotSeatsForUsers()->call($org, $params);
    }

    /** @return */
    public function cancelCopilotSeatAssignmentForUsers(string $org, array $params): \ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok\Application\Json|WithoutBody
    {
        return $this->operators->copilot👷CancelCopilotSeatAssignmentForUsers()->call($org, $params);
    }

    /** @return Observable<Schema\CopilotUsageMetrics> */
    public function usageMetricsForOrg(string $org, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷UsageMetricsForOrg()->call($org, $since, $until, $page, $perPage);
    }

    /** @return Observable<Schema\CopilotUsageMetrics> */
    public function usageMetricsForOrgListing(string $org, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷UsageMetricsForOrgListing()->call($org, $since, $until, $page, $perPage);
    }

    /** @return */
    public function getCopilotSeatDetailsForUser(string $org, string $username): CopilotSeatDetails|WithoutBody
    {
        return $this->operators->copilot👷GetCopilotSeatDetailsForUser()->call($org, $username);
    }

    /** @return iterable<int,Schema\CopilotUsageMetrics> */
    public function usageMetricsForTeam(string $org, string $teamSlug, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷UsageMetricsForTeam()->call($org, $teamSlug, $since, $until, $page, $perPage);
    }

    /** @return iterable<int,Schema\CopilotUsageMetrics> */
    public function usageMetricsForTeamListing(string $org, string $teamSlug, string $since, string $until, int $page, int $perPage): iterable
    {
        return $this->operators->copilot👷UsageMetricsForTeamListing()->call($org, $teamSlug, $since, $until, $page, $perPage);
    }
}
