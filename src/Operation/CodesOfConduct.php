<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CodeOfConduct;

final class CodesOfConduct
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\CodeOfConduct>|array{code:int} */
    public function getAllCodesOfConduct(): iterable
    {
        return $this->operators->codesOfConduct👷GetAllCodesOfConduct()->call();
    }

    /** @return Schema\CodeOfConduct|array{code:int} */
    public function getConductCode(string $key): CodeOfConduct|array
    {
        return $this->operators->codesOfConduct👷GetConductCode()->call($key);
    }
}
