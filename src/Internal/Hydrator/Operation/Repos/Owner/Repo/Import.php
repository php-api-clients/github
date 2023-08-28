<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo;

use ApiClients\Client\GitHub\Schema\BasicError;
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

use function assert;
use function count;
use function is_a;

class Import implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Import' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Import($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Import(array $payload): \ApiClients\Client\GitHub\Schema\Import
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['vcs'] ?? null;

            if ($value === null) {
                $properties['vcs'] = null;
                goto after_vcs;
            }

            $properties['vcs'] = $value;

            after_vcs:

            $value = $payload['use_lfs'] ?? null;

            if ($value === null) {
                $properties['useLfs'] = null;
                goto after_useLfs;
            }

            $properties['useLfs'] = $value;

            after_useLfs:

            $value = $payload['vcs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'vcs_url';
                goto after_vcsUrl;
            }

            $properties['vcsUrl'] = $value;

            after_vcsUrl:

            $value = $payload['svc_root'] ?? null;

            if ($value === null) {
                $properties['svcRoot'] = null;
                goto after_svcRoot;
            }

            $properties['svcRoot'] = $value;

            after_svcRoot:

            $value = $payload['tfvc_project'] ?? null;

            if ($value === null) {
                $properties['tfvcProject'] = null;
                goto after_tfvcProject;
            }

            $properties['tfvcProject'] = $value;

            after_tfvcProject:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['status_text'] ?? null;

            if ($value === null) {
                $properties['statusText'] = null;
                goto after_statusText;
            }

            $properties['statusText'] = $value;

            after_statusText:

            $value = $payload['failed_step'] ?? null;

            if ($value === null) {
                $properties['failedStep'] = null;
                goto after_failedStep;
            }

            $properties['failedStep'] = $value;

            after_failedStep:

            $value = $payload['error_message'] ?? null;

            if ($value === null) {
                $properties['errorMessage'] = null;
                goto after_errorMessage;
            }

            $properties['errorMessage'] = $value;

            after_errorMessage:

            $value = $payload['import_percent'] ?? null;

            if ($value === null) {
                $properties['importPercent'] = null;
                goto after_importPercent;
            }

            $properties['importPercent'] = $value;

            after_importPercent:

            $value = $payload['commit_count'] ?? null;

            if ($value === null) {
                $properties['commitCount'] = null;
                goto after_commitCount;
            }

            $properties['commitCount'] = $value;

            after_commitCount:

            $value = $payload['push_percent'] ?? null;

            if ($value === null) {
                $properties['pushPercent'] = null;
                goto after_pushPercent;
            }

            $properties['pushPercent'] = $value;

            after_pushPercent:

            $value = $payload['has_large_files'] ?? null;

            if ($value === null) {
                $properties['hasLargeFiles'] = null;
                goto after_hasLargeFiles;
            }

            $properties['hasLargeFiles'] = $value;

            after_hasLargeFiles:

            $value = $payload['large_files_size'] ?? null;

            if ($value === null) {
                $properties['largeFilesSize'] = null;
                goto after_largeFilesSize;
            }

            $properties['largeFilesSize'] = $value;

            after_largeFilesSize:

            $value = $payload['large_files_count'] ?? null;

            if ($value === null) {
                $properties['largeFilesCount'] = null;
                goto after_largeFilesCount;
            }

            $properties['largeFilesCount'] = $value;

            after_largeFilesCount:

            $value = $payload['project_choices'] ?? null;

            if ($value === null) {
                $properties['projectChoices'] = null;
                goto after_projectChoices;
            }

            $properties['projectChoices'] = $value;

            after_projectChoices:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['authors_count'] ?? null;

            if ($value === null) {
                $properties['authorsCount'] = null;
                goto after_authorsCount;
            }

            $properties['authorsCount'] = $value;

            after_authorsCount:

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

            $value = $payload['authors_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'authors_url';
                goto after_authorsUrl;
            }

            $properties['authorsUrl'] = $value;

            after_authorsUrl:

            $value = $payload['repository_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_url';
                goto after_repositoryUrl;
            }

            $properties['repositoryUrl'] = $value;

            after_repositoryUrl:

            $value = $payload['svn_root'] ?? null;

            if ($value === null) {
                $properties['svnRoot'] = null;
                goto after_svnRoot;
            }

            $properties['svnRoot'] = $value;

            after_svnRoot:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Import', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Import::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Import(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Import', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\Import' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Import($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($object),
                default => throw new LogicException('No serialization defined for $className'),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Import(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\Import);
        $result = [];

        $vcs = $object->vcs;

        if ($vcs === null) {
            goto after_vcs;
        }

        after_vcs:        $result['vcs'] = $vcs;

        $useLfs = $object->useLfs;

        if ($useLfs === null) {
            goto after_useLfs;
        }

        after_useLfs:        $result['use_lfs'] = $useLfs;

        $vcsUrl                                 = $object->vcsUrl;
        after_vcsUrl:        $result['vcs_url'] = $vcsUrl;

        $svcRoot = $object->svcRoot;

        if ($svcRoot === null) {
            goto after_svcRoot;
        }

        after_svcRoot:        $result['svc_root'] = $svcRoot;

        $tfvcProject = $object->tfvcProject;

        if ($tfvcProject === null) {
            goto after_tfvcProject;
        }

        after_tfvcProject:        $result['tfvc_project'] = $tfvcProject;

        $status                                = $object->status;
        after_status:        $result['status'] = $status;

        $statusText = $object->statusText;

        if ($statusText === null) {
            goto after_statusText;
        }

        after_statusText:        $result['status_text'] = $statusText;

        $failedStep = $object->failedStep;

        if ($failedStep === null) {
            goto after_failedStep;
        }

        after_failedStep:        $result['failed_step'] = $failedStep;

        $errorMessage = $object->errorMessage;

        if ($errorMessage === null) {
            goto after_errorMessage;
        }

        after_errorMessage:        $result['error_message'] = $errorMessage;

        $importPercent = $object->importPercent;

        if ($importPercent === null) {
            goto after_importPercent;
        }

        after_importPercent:        $result['import_percent'] = $importPercent;

        $commitCount = $object->commitCount;

        if ($commitCount === null) {
            goto after_commitCount;
        }

        after_commitCount:        $result['commit_count'] = $commitCount;

        $pushPercent = $object->pushPercent;

        if ($pushPercent === null) {
            goto after_pushPercent;
        }

        after_pushPercent:        $result['push_percent'] = $pushPercent;

        $hasLargeFiles = $object->hasLargeFiles;

        if ($hasLargeFiles === null) {
            goto after_hasLargeFiles;
        }

        after_hasLargeFiles:        $result['has_large_files'] = $hasLargeFiles;

        $largeFilesSize = $object->largeFilesSize;

        if ($largeFilesSize === null) {
            goto after_largeFilesSize;
        }

        after_largeFilesSize:        $result['large_files_size'] = $largeFilesSize;

        $largeFilesCount = $object->largeFilesCount;

        if ($largeFilesCount === null) {
            goto after_largeFilesCount;
        }

        after_largeFilesCount:        $result['large_files_count'] = $largeFilesCount;

        $projectChoices = $object->projectChoices;

        if ($projectChoices === null) {
            goto after_projectChoices;
        }

        static $projectChoicesSerializer0;

        if ($projectChoicesSerializer0 === null) {
            $projectChoicesSerializer0 = new SerializeArrayItems(...[]);
        }

        $projectChoices                                         = $projectChoicesSerializer0->serialize($projectChoices, $this);
        after_projectChoices:        $result['project_choices'] = $projectChoices;

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $authorsCount = $object->authorsCount;

        if ($authorsCount === null) {
            goto after_authorsCount;
        }

        after_authorsCount:        $result['authors_count'] = $authorsCount;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $authorsUrl                                     = $object->authorsUrl;
        after_authorsUrl:        $result['authors_url'] = $authorsUrl;

        $repositoryUrl                                        = $object->repositoryUrl;
        after_repositoryUrl:        $result['repository_url'] = $repositoryUrl;

        $svnRoot = $object->svnRoot;

        if ($svnRoot === null) {
            goto after_svnRoot;
        }

        after_svnRoot:        $result['svn_root'] = $svnRoot;

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
