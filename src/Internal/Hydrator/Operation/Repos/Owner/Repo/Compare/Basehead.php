<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Compare;

use ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Schema\Commit\Author;
use ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Schema\Commit\Committer;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Commit;
use ApiClients\Client\GitHub\Schema\Commit\Commit\Tree;
use ApiClients\Client\GitHub\Schema\Commit\Stats;
use ApiClients\Client\GitHub\Schema\CommitComparison;
use ApiClients\Client\GitHub\Schema\GitUser;
use ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable;
use ApiClients\Client\GitHub\Schema\Verification;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class Basehead implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHub\Schema\CommitComparison' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommitComparison($payload),
                'ApiClients\Client\GitHub\Schema\Commit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit($payload),
                'ApiClients\Client\GitHub\Schema\Commit\Commit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit($payload),
                'ApiClients\Client\GitHub\Schema\GitUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($payload),
                'ApiClients\Client\GitHub\Schema\Commit\Commit\Tree' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree($payload),
                'ApiClients\Client\GitHub\Schema\Verification' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($payload),
                'ApiClients\Client\GitHub\Schema\Commit\Stats' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommitComparison(array $payload): CommitComparison
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['permalink_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permalink_url';
                goto after_permalinkUrl;
            }

            $properties['permalinkUrl'] = $value;

            after_permalinkUrl:

            $value = $payload['diff_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'diff_url';
                goto after_diffUrl;
            }

            $properties['diffUrl'] = $value;

            after_diffUrl:

            $value = $payload['patch_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'patch_url';
                goto after_patchUrl;
            }

            $properties['patchUrl'] = $value;

            after_patchUrl:

            $value = $payload['base_commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'base_commit';
                goto after_baseCommit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'baseCommit';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['baseCommit'] = $value;

            after_baseCommit:

            $value = $payload['merge_base_commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'merge_base_commit';
                goto after_mergeBaseCommit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'mergeBaseCommit';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['mergeBaseCommit'] = $value;

            after_mergeBaseCommit:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['ahead_by'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ahead_by';
                goto after_aheadBy;
            }

            $properties['aheadBy'] = $value;

            after_aheadBy:

            $value = $payload['behind_by'] ?? null;

            if ($value === null) {
                $missingFields[] = 'behind_by';
                goto after_behindBy;
            }

            $properties['behindBy'] = $value;

            after_behindBy:

            $value = $payload['total_commits'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_commits';
                goto after_totalCommits;
            }

            $properties['totalCommits'] = $value;

            after_totalCommits:

            $value = $payload['commits'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commits';
                goto after_commits;
            }

            $properties['commits'] = $value;

            after_commits:

            $value = $payload['files'] ?? null;

            if ($value === null) {
                $properties['files'] = null;
                goto after_files;
            }

            $properties['files'] = $value;

            after_files:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommitComparison', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CommitComparison::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CommitComparison(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommitComparison', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit(array $payload): Commit
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commit';
                goto after_commit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'commit';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['commit'] = $value;

            after_commit:

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author';
                goto after_author;
            }

            static $authorCaster1;

            if ($authorCaster1 === null) {
                $authorCaster1 = new Author(...[]);
            }

            $value = $authorCaster1->cast($value, $this);

            if ($value === null) {
                                $missingFields[] = 'author';
                goto after_author;
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $missingFields[] = 'committer';
                goto after_committer;
            }

            static $committerCaster1;

            if ($committerCaster1 === null) {
                $committerCaster1 = new Committer(...[]);
            }

            $value = $committerCaster1->cast($value, $this);

            if ($value === null) {
                                $missingFields[] = 'committer';
                goto after_committer;
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['parents'] ?? null;

            if ($value === null) {
                $missingFields[] = 'parents';
                goto after_parents;
            }

            $properties['parents'] = $value;

            after_parents:

            $value = $payload['stats'] ?? null;

            if ($value === null) {
                $properties['stats'] = null;
                goto after_stats;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'stats';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['stats'] = $value;

            after_stats:

            $value = $payload['files'] ?? null;

            if ($value === null) {
                $properties['files'] = null;
                goto after_files;
            }

            $properties['files'] = $value;

            after_files:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Commit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Commit(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit(array $payload): \ApiClients\Client\GitHub\Schema\Commit\Commit
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $properties['author'] = null;
                goto after_author;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'author';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $properties['committer'] = null;
                goto after_committer;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'committer';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['comment_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comment_count';
                goto after_commentCount;
            }

            $properties['commentCount'] = $value;

            after_commentCount:

            $value = $payload['tree'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tree';
                goto after_tree;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'tree';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['tree'] = $value;

            after_tree:

            $value = $payload['verification'] ?? null;

            if ($value === null) {
                $properties['verification'] = null;
                goto after_verification;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'verification';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['verification'] = $value;

            after_verification:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Commit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Commit\Commit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Commit\Commit(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Commit', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser(array $payload): GitUser
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['date'] ?? null;

            if ($value === null) {
                $properties['date'] = null;
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(GitUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new GitUser(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GitUser', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree(array $payload): Tree
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Commit\Tree', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Tree::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Tree(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Commit\Tree', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification(array $payload): Verification
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['verified'] ?? null;

            if ($value === null) {
                $missingFields[] = 'verified';
                goto after_verified;
            }

            $properties['verified'] = $value;

            after_verified:

            $value = $payload['reason'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reason';
                goto after_reason;
            }

            $properties['reason'] = $value;

            after_reason:

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $properties['payload'] = null;
                goto after_payload;
            }

            $properties['payload'] = $value;

            after_payload:

            $value = $payload['signature'] ?? null;

            if ($value === null) {
                $properties['signature'] = null;
                goto after_signature;
            }

            $properties['signature'] = $value;

            after_signature:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Verification', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Verification::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Verification(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Verification', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats(array $payload): Stats
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['additions'] ?? null;

            if ($value === null) {
                $properties['additions'] = null;
                goto after_additions;
            }

            $properties['additions'] = $value;

            after_additions:

            $value = $payload['deletions'] ?? null;

            if ($value === null) {
                $properties['deletions'] = null;
                goto after_deletions;
            }

            $properties['deletions'] = $value;

            after_deletions:

            $value = $payload['total'] ?? null;

            if ($value === null) {
                $properties['total'] = null;
                goto after_total;
            }

            $properties['total'] = $value;

            after_total:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Stats', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Stats::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Stats(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Commit\Stats', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable(array $payload): ServiceUnavailable
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['code'] ?? null;

            if ($value === null) {
                $properties['code'] = null;
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ServiceUnavailable::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ServiceUnavailable(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\CommitComparison' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommitComparison($object),
                'ApiClients\Client\GitHub\Schema\Commit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit($object),
                'ApiClients\Client\GitHub\Schema\Commit\Commit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit($object),
                'ApiClients\Client\GitHub\Schema\GitUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($object),
                'ApiClients\Client\GitHub\Schema\Commit\Commit\Tree' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree($object),
                'ApiClients\Client\GitHub\Schema\Verification' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($object),
                'ApiClients\Client\GitHub\Schema\Commit\Stats' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable($object),
                default => throw new LogicException("No serialization defined for $className"),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommitComparison(mixed $object): mixed
    {
        assert($object instanceof CommitComparison);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $permalinkUrl                                       = $object->permalinkUrl;
        after_permalinkUrl:        $result['permalink_url'] = $permalinkUrl;

        $diffUrl                                  = $object->diffUrl;
        after_diffUrl:        $result['diff_url'] = $diffUrl;

        $patchUrl                                   = $object->patchUrl;
        after_patchUrl:        $result['patch_url'] = $patchUrl;

        $baseCommit                                     = $object->baseCommit;
        $baseCommit                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit($baseCommit);
        after_baseCommit:        $result['base_commit'] = $baseCommit;

        $mergeBaseCommit                                           = $object->mergeBaseCommit;
        $mergeBaseCommit                                           = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit($mergeBaseCommit);
        after_mergeBaseCommit:        $result['merge_base_commit'] = $mergeBaseCommit;

        $status                                = $object->status;
        after_status:        $result['status'] = $status;

        $aheadBy                                  = $object->aheadBy;
        after_aheadBy:        $result['ahead_by'] = $aheadBy;

        $behindBy                                   = $object->behindBy;
        after_behindBy:        $result['behind_by'] = $behindBy;

        $totalCommits                                       = $object->totalCommits;
        after_totalCommits:        $result['total_commits'] = $totalCommits;

        $commits = $object->commits;
        static $commitsSerializer0;

        if ($commitsSerializer0 === null) {
            $commitsSerializer0 = new SerializeArrayItems(...[]);
        }

        $commits                                 = $commitsSerializer0->serialize($commits, $this);
        after_commits:        $result['commits'] = $commits;

        $files = $object->files;

        if ($files === null) {
            goto after_files;
        }

        static $filesSerializer0;

        if ($filesSerializer0 === null) {
            $filesSerializer0 = new SerializeArrayItems(...[]);
        }

        $files                               = $filesSerializer0->serialize($files, $this);
        after_files:        $result['files'] = $files;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit(mixed $object): mixed
    {
        assert($object instanceof Commit);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $sha                             = $object->sha;
        after_sha:        $result['sha'] = $sha;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $commentsUrl                                      = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        $commit                                = $object->commit;
        $commit                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit($commit);
        after_commit:        $result['commit'] = $commit;

        $author = $object->author;
        $author = match ($author::class) {
                        'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($author),
            'ApiClients\Client\GitHub\Schema\EmptyObject' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EmptyObject($author),
        };
        after_author:        $result['author'] = $author;

        $committer = $object->committer;
        $committer = match ($committer::class) {
                        'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($committer),
            'ApiClients\Client\GitHub\Schema\EmptyObject' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️EmptyObject($committer),
        };
        after_committer:        $result['committer'] = $committer;

        $parents = $object->parents;
        static $parentsSerializer0;

        if ($parentsSerializer0 === null) {
            $parentsSerializer0 = new SerializeArrayItems(...[]);
        }

        $parents                                 = $parentsSerializer0->serialize($parents, $this);
        after_parents:        $result['parents'] = $parents;

        $stats = $object->stats;

        if ($stats === null) {
            goto after_stats;
        }

        $stats                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats($stats);
        after_stats:        $result['stats'] = $stats;

        $files = $object->files;

        if ($files === null) {
            goto after_files;
        }

        static $filesSerializer0;

        if ($filesSerializer0 === null) {
            $filesSerializer0 = new SerializeArrayItems(...[]);
        }

        $files                               = $filesSerializer0->serialize($files, $this);
        after_files:        $result['files'] = $files;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\Commit\Commit);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }

        $author                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($author);
        after_author:        $result['author'] = $author;

        $committer = $object->committer;

        if ($committer === null) {
            goto after_committer;
        }

        $committer                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser($committer);
        after_committer:        $result['committer'] = $committer;

        $message                                 = $object->message;
        after_message:        $result['message'] = $message;

        $commentCount                                       = $object->commentCount;
        after_commentCount:        $result['comment_count'] = $commentCount;

        $tree                              = $object->tree;
        $tree                              = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree($tree);
        after_tree:        $result['tree'] = $tree;

        $verification = $object->verification;

        if ($verification === null) {
            goto after_verification;
        }

        $verification                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification($verification);
        after_verification:        $result['verification'] = $verification;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GitUser(mixed $object): mixed
    {
        assert($object instanceof GitUser);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }

        after_date:        $result['date'] = $date;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Commit⚡️Tree(mixed $object): mixed
    {
        assert($object instanceof Tree);
        $result = [];

        $sha                             = $object->sha;
        after_sha:        $result['sha'] = $sha;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Verification(mixed $object): mixed
    {
        assert($object instanceof Verification);
        $result = [];

        $verified                                  = $object->verified;
        after_verified:        $result['verified'] = $verified;

        $reason                                = $object->reason;
        after_reason:        $result['reason'] = $reason;

        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }

        after_payload:        $result['payload'] = $payload;

        $signature = $object->signature;

        if ($signature === null) {
            goto after_signature;
        }

        after_signature:        $result['signature'] = $signature;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Commit⚡️Stats(mixed $object): mixed
    {
        assert($object instanceof Stats);
        $result = [];

        $additions = $object->additions;

        if ($additions === null) {
            goto after_additions;
        }

        after_additions:        $result['additions'] = $additions;

        $deletions = $object->deletions;

        if ($deletions === null) {
            goto after_deletions;
        }

        after_deletions:        $result['deletions'] = $deletions;

        $total = $object->total;

        if ($total === null) {
            goto after_total;
        }

        after_total:        $result['total'] = $total;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable(mixed $object): mixed
    {
        assert($object instanceof ServiceUnavailable);
        $result = [];

        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }

        after_code:        $result['code'] = $code;

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
