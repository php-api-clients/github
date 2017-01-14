<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @EmptyResource("EmptyRepository")
 */
abstract class Repository extends AbstractResource implements RepositoryInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $full_name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var bool
     */
    protected $private;

    /**
     * @var bool
     */
    protected $fork;

    /**
     * @var string
     */
    protected $homepage;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var int
     */
    protected $forks_count;

    /**
     * @var int
     */
    protected $stargazers_count;

    /**
     * @var int
     */
    protected $watchers_count;

    /**
     * @var int
     */
    protected $size;

    /**
     * @var string
     */
    protected $default_branch;

    /**
     * @var int
     */
    protected $open_issues_count;

    /**
     * @var bool
     */
    protected $has_issues;

    /**
     * @var bool
     */
    protected $has_wiki;

    /**
     * @var bool
     */
    protected $has_pages;

    /**
     * @var bool
     */
    protected $has_downloads;

    /**
     * @var DateTimeInterface
     */
    protected $pushed_at;

    /**
     * @var DateTimeInterface
     */
    protected $created_at;

    /**
     * @var DateTimeInterface
     */
    protected $updated_at;

    /**
     * @var array
     */
    //protected $permissions;

    /**
     * @return int
     */
    public function id() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function fullName() : string
    {
        return $this->full_name;
    }

    /**
     * @return string
     */
    public function description() : string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function private() : bool
    {
        return $this->private;
    }

    /**
     * @return bool
     */
    public function fork() : bool
    {
        return $this->fork;
    }

    /**
     * @return string
     */
    public function homepage() : string
    {
        return $this->homepage;
    }

    /**
     * @return string
     */
    public function language() : string
    {
        return $this->language;
    }

    /**
     * @return int
     */
    public function forksCount() : int
    {
        return $this->forks_count;
    }

    /**
     * @return int
     */
    public function stargazersCount() : int
    {
        return $this->stargazers_count;
    }

    /**
     * @return int
     */
    public function watchersCount() : int
    {
        return $this->watchers_count;
    }

    /**
     * @return int
     */
    public function size() : int
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function defaultBranch() : string
    {
        return $this->default_branch;
    }

    /**
     * @return int
     */
    public function openIssuesCount() : int
    {
        return $this->open_issues_count;
    }

    /**
     * @return bool
     */
    public function hasIssues() : bool
    {
        return $this->has_issues;
    }

    /**
     * @return bool
     */
    public function hasWiki() : bool
    {
        return $this->has_wiki;
    }

    /**
     * @return bool
     */
    public function hasPages() : bool
    {
        return $this->has_pages;
    }

    /**
     * @return bool
     */
    public function hasDownloads() : bool
    {
        return $this->has_downloads;
    }

    /**
     * @return DateTimeInterface
     */
    public function pushedAt() : DateTimeInterface
    {
        return $this->pushed_at;
    }

    /**
     * @return DateTimeInterface
     */
    public function createdAt() : DateTimeInterface
    {
        return $this->created_at;
    }

    /**
     * @return DateTimeInterface
     */
    public function updatedAt() : DateTimeInterface
    {
        return $this->updated_at;
    }

    /**
     * @return array
     */
    public function permissions() : array
    {
        return $this->permissions;
    }

    public function labels()
    {
        return $this->labels;
    }
}
