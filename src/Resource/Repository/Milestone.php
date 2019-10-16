<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     creator="User"
 * )
 * @EmptyResource("Repository\EmptyMilestone")
 */
abstract class Milestone extends AbstractResource implements MilestoneInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $number;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var User
     */
    protected $creator;

    /**
     * @var int
     */
    protected $open_issues;

    /**
     * @var int
     */
    protected $closed_issues;

    /**
     * @var string
     */
    protected $url;

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function number(): int
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function state(): string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function description(): string
    {
        return $this->description;
    }

    /**
     * @return User
     */
    public function creator(): User
    {
        return $this->creator;
    }

    /**
     * @return int
     */
    public function openIssues(): int
    {
        return $this->open_issues;
    }

    /**
     * @return int
     */
    public function closedIssues(): int
    {
        return $this->closed_issues;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->url;
    }
}
