<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\ApiOverview;
use ApiClients\Client\GitHub\Schema\Root;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use Psr\Http\Message\ResponseInterface;

final class Meta
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function root(): Root
    {
        return $this->operators->meta👷Root()->call();
    }

    public function get(): ApiOverview|WithoutBody
    {
        return $this->operators->meta👷Get()->call();
    }

    public function getOctocat(string $s): ResponseInterface
    {
        return $this->operators->meta👷GetOctocat()->call($s);
    }

    /** @return iterable<int,string> */
    public function getAllVersions(): iterable
    {
        return $this->operators->meta👷GetAllVersions()->call();
    }

    public function getZen(): string
    {
        return $this->operators->meta👷GetZen()->call();
    }
}
