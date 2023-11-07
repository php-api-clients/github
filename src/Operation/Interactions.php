<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\InteractionLimitResponse;
use ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForOrg\Response\ApplicationJson\Ok\Application\Json\One;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Interactions
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function getRestrictionsForOrg(string $org): InteractionLimitResponse|One
    {
        return $this->operators->interactions👷GetRestrictionsForOrg()->call($org);
    }

    public function setRestrictionsForOrg(string $org, array $params): InteractionLimitResponse
    {
        return $this->operators->interactions👷SetRestrictionsForOrg()->call($org, $params);
    }

    public function removeRestrictionsForOrg(string $org): WithoutBody
    {
        return $this->operators->interactions👷RemoveRestrictionsForOrg()->call($org);
    }

    public function getRestrictionsForRepo(string $owner, string $repo): InteractionLimitResponse|\ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One
    {
        return $this->operators->interactions👷GetRestrictionsForRepo()->call($owner, $repo);
    }

    public function setRestrictionsForRepo(string $owner, string $repo, array $params): InteractionLimitResponse|WithoutBody
    {
        return $this->operators->interactions👷SetRestrictionsForRepo()->call($owner, $repo, $params);
    }

    public function removeRestrictionsForRepo(string $owner, string $repo): WithoutBody
    {
        return $this->operators->interactions👷RemoveRestrictionsForRepo()->call($owner, $repo);
    }

    public function getRestrictionsForAuthenticatedUser(): InteractionLimitResponse|\ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json\One|WithoutBody
    {
        return $this->operators->interactions👷GetRestrictionsForAuthenticatedUser()->call();
    }

    public function setRestrictionsForAuthenticatedUser(array $params): InteractionLimitResponse
    {
        return $this->operators->interactions👷SetRestrictionsForAuthenticatedUser()->call($params);
    }

    public function removeRestrictionsForAuthenticatedUser(): WithoutBody
    {
        return $this->operators->interactions👷RemoveRestrictionsForAuthenticatedUser()->call();
    }
}
