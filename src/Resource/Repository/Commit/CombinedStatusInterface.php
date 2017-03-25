<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\ResourceInterface;

interface CombinedStatusInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\Commit\\CombinedStatus';

    /**
     * @return string
     */
    public function state() : string;

    /**
     * @return string
     */
    public function sha() : string;

    /**
     * @return int
     */
    public function totalCount() : int;

    /**
     * @return Repository\Commit\Status
     */
    public function statuses() : Repository\Commit\Status;

    /**
     * @return Repository
     */
    public function repository() : Repository;
}
