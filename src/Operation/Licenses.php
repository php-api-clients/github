<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\License;
use ApiClients\Client\GitHub\Schema\LicenseContent;

final class Licenses
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\LicenseSimple>|array{code:int} */
    public function getAllCommonlyUsed(bool $featured, int $perPage, int $page): iterable
    {
        return $this->operators->licenses👷GetAllCommonlyUsed()->call($featured, $perPage, $page);
    }

    /** @return Observable<Schema\LicenseSimple>|array{code:int} */
    public function getAllCommonlyUsedListing(bool $featured, int $perPage, int $page): iterable
    {
        return $this->operators->licenses👷GetAllCommonlyUsedListing()->call($featured, $perPage, $page);
    }

    /** @return Schema\License|array{code:int} */
    public function get(string $license): License|array
    {
        return $this->operators->licenses👷Get()->call($license);
    }

    /** @return */
    public function getForRepo(string $owner, string $repo): LicenseContent|array
    {
        return $this->operators->licenses👷GetForRepo()->call($owner, $repo);
    }
}
