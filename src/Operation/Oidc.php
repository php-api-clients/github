<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\OidcCustomSub;

final class Oidc
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getOidcCustomSubTemplateForOrg(string $org): OidcCustomSub|array
    {
        return $this->operators->oidc👷GetOidcCustomSubTemplateForOrg()->call($org);
    }

    /** @return */
    public function updateOidcCustomSubTemplateForOrg(string $org, array $params): EmptyObject|array
    {
        return $this->operators->oidc👷UpdateOidcCustomSubTemplateForOrg()->call($org, $params);
    }
}
