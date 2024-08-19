<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Contents;

use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\ContentTree;
use ApiClients\Client\GitHub\Schema\ContentTree\Links;
use ApiClients\Client\GitHub\Schema\FileCommit;
use ApiClients\Client\GitHub\Schema\FileCommit\Commit;
use ApiClients\Client\GitHub\Schema\FileCommit\Commit\Author;
use ApiClients\Client\GitHub\Schema\FileCommit\Commit\Committer;
use ApiClients\Client\GitHub\Schema\FileCommit\Commit\Tree;
use ApiClients\Client\GitHub\Schema\FileCommit\Commit\Verification;
use ApiClients\Client\GitHub\Schema\FileCommit\Content;
use ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable;
use ApiClients\Client\GitHub\Schema\ValidationError;
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

class Path implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\ContentTree' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree($payload),
                'ApiClients\Client\GitHub\Schema\ContentTree\Links' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree⚡️Links($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\FileCommit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit($payload),
                'ApiClients\Client\GitHub\Schema\FileCommit\Content' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Content($payload),
                'ApiClients\Client\GitHub\Schema\FileCommit\Content\Links' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Content⚡️Links($payload),
                'ApiClients\Client\GitHub\Schema\FileCommit\Commit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit($payload),
                'ApiClients\Client\GitHub\Schema\FileCommit\Commit\Author' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Author($payload),
                'ApiClients\Client\GitHub\Schema\FileCommit\Commit\Committer' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Committer($payload),
                'ApiClients\Client\GitHub\Schema\FileCommit\Commit\Tree' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Tree($payload),
                'ApiClients\Client\GitHub\Schema\FileCommit\Commit\Verification' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Verification($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree(array $payload): ContentTree
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['size'] ?? null;

            if ($value === null) {
                $missingFields[] = 'size';
                goto after_size;
            }

            $properties['size'] = $value;

            after_size:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['path'] ?? null;

            if ($value === null) {
                $missingFields[] = 'path';
                goto after_path;
            }

            $properties['path'] = $value;

            after_path:

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

            $value = $payload['git_url'] ?? null;

            if ($value === null) {
                $properties['gitUrl'] = null;
                goto after_gitUrl;
            }

            $properties['gitUrl'] = $value;

            after_gitUrl:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['download_url'] ?? null;

            if ($value === null) {
                $properties['downloadUrl'] = null;
                goto after_downloadUrl;
            }

            $properties['downloadUrl'] = $value;

            after_downloadUrl:

            $value = $payload['entries'] ?? null;

            if ($value === null) {
                $properties['entries'] = null;
                goto after_entries;
            }

            $properties['entries'] = $value;

            after_entries:

            $value = $payload['_links'] ?? null;

            if ($value === null) {
                $missingFields[] = '_links';
                goto after_links;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'links';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree⚡️Links($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['links'] = $value;

            after_links:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ContentTree', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ContentTree::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ContentTree(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ContentTree', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree⚡️Links(array $payload): Links
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['git'] ?? null;

            if ($value === null) {
                $properties['git'] = null;
                goto after_git;
            }

            $properties['git'] = $value;

            after_git:

            $value = $payload['html'] ?? null;

            if ($value === null) {
                $properties['html'] = null;
                goto after_html;
            }

            $properties['html'] = $value;

            after_html:

            $value = $payload['self'] ?? null;

            if ($value === null) {
                $missingFields[] = 'self';
                goto after_self;
            }

            $properties['self'] = $value;

            after_self:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ContentTree\Links', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Links::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Links(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ContentTree\Links', $exception, stack: $this->hydrationStack);
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

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit(array $payload): FileCommit
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['content'] ?? null;

            if ($value === null) {
                $properties['content'] = null;
                goto after_content;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'content';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Content($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['content'] = $value;

            after_content:

            $value = $payload['commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commit';
                goto after_commit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'commit';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['commit'] = $value;

            after_commit:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(FileCommit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new FileCommit(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Content(array $payload): Content
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

            $value = $payload['path'] ?? null;

            if ($value === null) {
                $properties['path'] = null;
                goto after_path;
            }

            $properties['path'] = $value;

            after_path:

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $properties['sha'] = null;
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['size'] ?? null;

            if ($value === null) {
                $properties['size'] = null;
                goto after_size;
            }

            $properties['size'] = $value;

            after_size:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['git_url'] ?? null;

            if ($value === null) {
                $properties['gitUrl'] = null;
                goto after_gitUrl;
            }

            $properties['gitUrl'] = $value;

            after_gitUrl:

            $value = $payload['download_url'] ?? null;

            if ($value === null) {
                $properties['downloadUrl'] = null;
                goto after_downloadUrl;
            }

            $properties['downloadUrl'] = $value;

            after_downloadUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['_links'] ?? null;

            if ($value === null) {
                $properties['links'] = null;
                goto after_links;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'links';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Content⚡️Links($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['links'] = $value;

            after_links:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Content', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Content::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Content(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Content', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Content⚡️Links(array $payload): \ApiClients\Client\GitHub\Schema\FileCommit\Content\Links
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['self'] ?? null;

            if ($value === null) {
                $properties['self'] = null;
                goto after_self;
            }

            $properties['self'] = $value;

            after_self:

            $value = $payload['git'] ?? null;

            if ($value === null) {
                $properties['git'] = null;
                goto after_git;
            }

            $properties['git'] = $value;

            after_git:

            $value = $payload['html'] ?? null;

            if ($value === null) {
                $properties['html'] = null;
                goto after_html;
            }

            $properties['html'] = $value;

            after_html:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Content\Links', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\FileCommit\Content\Links::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\FileCommit\Content\Links(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Content\Links', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit(array $payload): Commit
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $properties['sha'] = null;
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $properties['nodeId'] = null;
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $properties['author'] = null;
                goto after_author;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'author';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Author($value);
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
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Committer($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['tree'] ?? null;

            if ($value === null) {
                $properties['tree'] = null;
                goto after_tree;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'tree';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Tree($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['tree'] = $value;

            after_tree:

            $value = $payload['parents'] ?? null;

            if ($value === null) {
                $properties['parents'] = null;
                goto after_parents;
            }

            $properties['parents'] = $value;

            after_parents:

            $value = $payload['verification'] ?? null;

            if ($value === null) {
                $properties['verification'] = null;
                goto after_verification;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'verification';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Verification($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['verification'] = $value;

            after_verification:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Commit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Commit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Commit(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Commit', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Author(array $payload): Author
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['date'] ?? null;

            if ($value === null) {
                $properties['date'] = null;
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:

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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Commit\Author', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Author::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Author(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Commit\Author', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Committer(array $payload): Committer
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['date'] ?? null;

            if ($value === null) {
                $properties['date'] = null;
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:

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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Commit\Committer', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Committer::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Committer(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Commit\Committer', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Tree(array $payload): Tree
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $properties['sha'] = null;
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Commit\Tree', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Tree::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Tree(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Commit\Tree', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Verification(array $payload): Verification
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['verified'] ?? null;

            if ($value === null) {
                $properties['verified'] = null;
                goto after_verified;
            }

            $properties['verified'] = $value;

            after_verified:

            $value = $payload['reason'] ?? null;

            if ($value === null) {
                $properties['reason'] = null;
                goto after_reason;
            }

            $properties['reason'] = $value;

            after_reason:

            $value = $payload['signature'] ?? null;

            if ($value === null) {
                $properties['signature'] = null;
                goto after_signature;
            }

            $properties['signature'] = $value;

            after_signature:

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $properties['payload'] = null;
                goto after_payload;
            }

            $properties['payload'] = $value;

            after_payload:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Commit\Verification', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Verification::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Verification(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\FileCommit\Commit\Verification', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(array $payload): ValidationError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'documentation_url';
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            $properties['errors'] = $value;

            after_errors:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ValidationError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\ContentTree' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree($object),
                'ApiClients\Client\GitHub\Schema\ContentTree\Links' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree⚡️Links($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHub\Schema\FileCommit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit($object),
                'ApiClients\Client\GitHub\Schema\FileCommit\Content' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Content($object),
                'ApiClients\Client\GitHub\Schema\FileCommit\Content\Links' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Content⚡️Links($object),
                'ApiClients\Client\GitHub\Schema\FileCommit\Commit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit($object),
                'ApiClients\Client\GitHub\Schema\FileCommit\Commit\Author' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Author($object),
                'ApiClients\Client\GitHub\Schema\FileCommit\Commit\Committer' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Committer($object),
                'ApiClients\Client\GitHub\Schema\FileCommit\Commit\Tree' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Tree($object),
                'ApiClients\Client\GitHub\Schema\FileCommit\Commit\Verification' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Verification($object),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree(mixed $object): mixed
    {
        assert($object instanceof ContentTree);
        $result = [];

        $type                              = $object->type;
        after_type:        $result['type'] = $type;

        $size                              = $object->size;
        after_size:        $result['size'] = $size;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $path                              = $object->path;
        after_path:        $result['path'] = $path;

        $sha                             = $object->sha;
        after_sha:        $result['sha'] = $sha;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $gitUrl = $object->gitUrl;

        if ($gitUrl === null) {
            goto after_gitUrl;
        }

        after_gitUrl:        $result['git_url'] = $gitUrl;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $downloadUrl = $object->downloadUrl;

        if ($downloadUrl === null) {
            goto after_downloadUrl;
        }

        after_downloadUrl:        $result['download_url'] = $downloadUrl;

        $entries = $object->entries;

        if ($entries === null) {
            goto after_entries;
        }

        static $entriesSerializer0;

        if ($entriesSerializer0 === null) {
            $entriesSerializer0 = new SerializeArrayItems(...[]);
        }

        $entries                                 = $entriesSerializer0->serialize($entries, $this);
        after_entries:        $result['entries'] = $entries;

        $links                                = $object->links;
        $links                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree⚡️Links($links);
        after_links:        $result['_links'] = $links;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree⚡️Links(mixed $object): mixed
    {
        assert($object instanceof Links);
        $result = [];

        $git = $object->git;

        if ($git === null) {
            goto after_git;
        }

        after_git:        $result['git'] = $git;

        $html = $object->html;

        if ($html === null) {
            goto after_html;
        }

        after_html:        $result['html'] = $html;

        $self                              = $object->self;
        after_self:        $result['self'] = $self;

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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit(mixed $object): mixed
    {
        assert($object instanceof FileCommit);
        $result = [];

        $content = $object->content;

        if ($content === null) {
            goto after_content;
        }

        $content                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Content($content);
        after_content:        $result['content'] = $content;

        $commit                                = $object->commit;
        $commit                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit($commit);
        after_commit:        $result['commit'] = $commit;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Content(mixed $object): mixed
    {
        assert($object instanceof Content);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $path = $object->path;

        if ($path === null) {
            goto after_path;
        }

        after_path:        $result['path'] = $path;

        $sha = $object->sha;

        if ($sha === null) {
            goto after_sha;
        }

        after_sha:        $result['sha'] = $sha;

        $size = $object->size;

        if ($size === null) {
            goto after_size;
        }

        after_size:        $result['size'] = $size;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $gitUrl = $object->gitUrl;

        if ($gitUrl === null) {
            goto after_gitUrl;
        }

        after_gitUrl:        $result['git_url'] = $gitUrl;

        $downloadUrl = $object->downloadUrl;

        if ($downloadUrl === null) {
            goto after_downloadUrl;
        }

        after_downloadUrl:        $result['download_url'] = $downloadUrl;

        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }

        after_type:        $result['type'] = $type;

        $links = $object->links;

        if ($links === null) {
            goto after_links;
        }

        $links                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Content⚡️Links($links);
        after_links:        $result['_links'] = $links;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Content⚡️Links(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\FileCommit\Content\Links);
        $result = [];

        $self = $object->self;

        if ($self === null) {
            goto after_self;
        }

        after_self:        $result['self'] = $self;

        $git = $object->git;

        if ($git === null) {
            goto after_git;
        }

        after_git:        $result['git'] = $git;

        $html = $object->html;

        if ($html === null) {
            goto after_html;
        }

        after_html:        $result['html'] = $html;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit(mixed $object): mixed
    {
        assert($object instanceof Commit);
        $result = [];

        $sha = $object->sha;

        if ($sha === null) {
            goto after_sha;
        }

        after_sha:        $result['sha'] = $sha;

        $nodeId = $object->nodeId;

        if ($nodeId === null) {
            goto after_nodeId;
        }

        after_nodeId:        $result['node_id'] = $nodeId;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }

        $author                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Author($author);
        after_author:        $result['author'] = $author;

        $committer = $object->committer;

        if ($committer === null) {
            goto after_committer;
        }

        $committer                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Committer($committer);
        after_committer:        $result['committer'] = $committer;

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $tree = $object->tree;

        if ($tree === null) {
            goto after_tree;
        }

        $tree                              = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Tree($tree);
        after_tree:        $result['tree'] = $tree;

        $parents = $object->parents;

        if ($parents === null) {
            goto after_parents;
        }

        static $parentsSerializer0;

        if ($parentsSerializer0 === null) {
            $parentsSerializer0 = new SerializeArrayItems(...[]);
        }

        $parents                                 = $parentsSerializer0->serialize($parents, $this);
        after_parents:        $result['parents'] = $parents;

        $verification = $object->verification;

        if ($verification === null) {
            goto after_verification;
        }

        $verification                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Verification($verification);
        after_verification:        $result['verification'] = $verification;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Author(mixed $object): mixed
    {
        assert($object instanceof Author);
        $result = [];

        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }

        after_date:        $result['date'] = $date;

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

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Committer(mixed $object): mixed
    {
        assert($object instanceof Committer);
        $result = [];

        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }

        after_date:        $result['date'] = $date;

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

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Tree(mixed $object): mixed
    {
        assert($object instanceof Tree);
        $result = [];

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $sha = $object->sha;

        if ($sha === null) {
            goto after_sha;
        }

        after_sha:        $result['sha'] = $sha;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️FileCommit⚡️Commit⚡️Verification(mixed $object): mixed
    {
        assert($object instanceof Verification);
        $result = [];

        $verified = $object->verified;

        if ($verified === null) {
            goto after_verified;
        }

        after_verified:        $result['verified'] = $verified;

        $reason = $object->reason;

        if ($reason === null) {
            goto after_reason;
        }

        after_reason:        $result['reason'] = $reason;

        $signature = $object->signature;

        if ($signature === null) {
            goto after_signature;
        }

        after_signature:        $result['signature'] = $signature;

        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }

        after_payload:        $result['payload'] = $payload;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        assert($object instanceof ValidationError);
        $result = [];

        $message                                 = $object->message;
        after_message:        $result['message'] = $message;

        $documentationUrl                                           = $object->documentationUrl;
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }

        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new SerializeArrayItems(...[]);
        }

        $errors                                = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;

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
