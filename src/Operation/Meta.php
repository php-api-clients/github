<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\ApiOverview;
use ApiClients\Client\GitHub\Schema\Root;
use Psr\Http\Message\ResponseInterface;

final class Meta
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function root(): Root|array
    {
        return $this->operators->meta👷Root()->call();
    }

    /** @return Schema\ApiOverview|array{code:int} */
    public function get(): ApiOverview|array
    {
        return $this->operators->meta👷Get()->call();
    }

    /** @return */
    public function getOctocat(string $s): ResponseInterface|array
    {
        return $this->operators->meta👷GetOctocat()->call($s);
    }

    /** @return Observable<string> */
    public function getAllVersions(): iterable
    {
        return $this->operators->meta👷GetAllVersions()->call();
    }

    /** @return */
    public function getZen(): array|string
    {
        return $this->operators->meta👷GetZen()->call();
    }
}
