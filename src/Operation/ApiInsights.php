<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\ApiInsightsSummaryStats;

final class ApiInsights
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\ApiInsightsRouteStats> */
    public function getRouteStatsByActor(string $org, string $actorType, int $actorId, string $minTimestamp, string $maxTimestamp, array $sort, string $apiRouteSubstring, int $page, int $perPage, string $direction): iterable
    {
        return $this->operators->apiInsights👷GetRouteStatsByActor()->call($org, $actorType, $actorId, $minTimestamp, $maxTimestamp, $sort, $apiRouteSubstring, $page, $perPage, $direction);
    }

    /** @return Observable<Schema\ApiInsightsRouteStats> */
    public function getRouteStatsByActorListing(string $org, string $actorType, int $actorId, string $minTimestamp, string $maxTimestamp, array $sort, string $apiRouteSubstring, int $page, int $perPage, string $direction): iterable
    {
        return $this->operators->apiInsights👷GetRouteStatsByActorListing()->call($org, $actorType, $actorId, $minTimestamp, $maxTimestamp, $sort, $apiRouteSubstring, $page, $perPage, $direction);
    }

    /** @return Observable<Schema\ApiInsightsSubjectStats> */
    public function getSubjectStats(string $org, string $minTimestamp, string $maxTimestamp, array $sort, string $subjectNameSubstring, int $page, int $perPage, string $direction): iterable
    {
        return $this->operators->apiInsights👷GetSubjectStats()->call($org, $minTimestamp, $maxTimestamp, $sort, $subjectNameSubstring, $page, $perPage, $direction);
    }

    /** @return Observable<Schema\ApiInsightsSubjectStats> */
    public function getSubjectStatsListing(string $org, string $minTimestamp, string $maxTimestamp, array $sort, string $subjectNameSubstring, int $page, int $perPage, string $direction): iterable
    {
        return $this->operators->apiInsights👷GetSubjectStatsListing()->call($org, $minTimestamp, $maxTimestamp, $sort, $subjectNameSubstring, $page, $perPage, $direction);
    }

    /** @return */
    public function getSummaryStats(string $org, string $minTimestamp, string $maxTimestamp): ApiInsightsSummaryStats
    {
        return $this->operators->apiInsights👷GetSummaryStats()->call($org, $minTimestamp, $maxTimestamp);
    }

    /** @return */
    public function getSummaryStatsByUser(string $org, string $userId, string $minTimestamp, string $maxTimestamp): ApiInsightsSummaryStats
    {
        return $this->operators->apiInsights👷GetSummaryStatsByUser()->call($org, $userId, $minTimestamp, $maxTimestamp);
    }

    /** @return */
    public function getSummaryStatsByActor(string $org, string $minTimestamp, string $maxTimestamp, string $actorType, int $actorId): ApiInsightsSummaryStats
    {
        return $this->operators->apiInsights👷GetSummaryStatsByActor()->call($org, $minTimestamp, $maxTimestamp, $actorType, $actorId);
    }

    /** @return Observable<Schema\ApiInsightsTimeStats> */
    public function getTimeStats(string $org, string $minTimestamp, string $maxTimestamp, string $timestampIncrement): iterable
    {
        return $this->operators->apiInsights👷GetTimeStats()->call($org, $minTimestamp, $maxTimestamp, $timestampIncrement);
    }

    /** @return Observable<Schema\ApiInsightsTimeStats> */
    public function getTimeStatsByUser(string $org, string $userId, string $minTimestamp, string $maxTimestamp, string $timestampIncrement): iterable
    {
        return $this->operators->apiInsights👷GetTimeStatsByUser()->call($org, $userId, $minTimestamp, $maxTimestamp, $timestampIncrement);
    }

    /** @return Observable<Schema\ApiInsightsTimeStats> */
    public function getTimeStatsByActor(string $org, string $actorType, int $actorId, string $minTimestamp, string $maxTimestamp, string $timestampIncrement): iterable
    {
        return $this->operators->apiInsights👷GetTimeStatsByActor()->call($org, $actorType, $actorId, $minTimestamp, $maxTimestamp, $timestampIncrement);
    }

    /** @return Observable<Schema\ApiInsightsUserStats> */
    public function getUserStats(string $org, string $userId, string $minTimestamp, string $maxTimestamp, array $sort, string $actorNameSubstring, int $page, int $perPage, string $direction): iterable
    {
        return $this->operators->apiInsights👷GetUserStats()->call($org, $userId, $minTimestamp, $maxTimestamp, $sort, $actorNameSubstring, $page, $perPage, $direction);
    }

    /** @return Observable<Schema\ApiInsightsUserStats> */
    public function getUserStatsListing(string $org, string $userId, string $minTimestamp, string $maxTimestamp, array $sort, string $actorNameSubstring, int $page, int $perPage, string $direction): iterable
    {
        return $this->operators->apiInsights👷GetUserStatsListing()->call($org, $userId, $minTimestamp, $maxTimestamp, $sort, $actorNameSubstring, $page, $perPage, $direction);
    }
}
