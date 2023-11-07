<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CodeOfConduct;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class CodesOfConduct
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<int,Schema\CodeOfConduct>|WithoutBody */
    public function getAllCodesOfConduct(): iterable|WithoutBody
    {
        return $this->operators->codesOfConduct👷GetAllCodesOfConduct()->call();
    }

    public function getConductCode(string $key): CodeOfConduct|WithoutBody
    {
        return $this->operators->codesOfConduct👷GetConductCode()->call($key);
    }
}
