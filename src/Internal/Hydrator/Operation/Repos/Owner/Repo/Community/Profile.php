<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Community;

use ApiClients\Client\GitHub\Schema\CodeOfConductSimple;
use ApiClients\Client\GitHub\Schema\CommunityHealthFile;
use ApiClients\Client\GitHub\Schema\CommunityProfile;
use ApiClients\Client\GitHub\Schema\CommunityProfile\Files;
use ApiClients\Client\GitHub\Schema\LicenseSimple;
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

class Profile implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\CommunityProfile' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile($payload),
                'ApiClients\Client\GitHub\Schema\CommunityProfile\Files' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile⚡️Files($payload),
                'ApiClients\Client\GitHub\Schema\CodeOfConductSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConductSimple($payload),
                'ApiClients\Client\GitHub\Schema\CommunityHealthFile' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($payload),
                'ApiClients\Client\GitHub\Schema\LicenseSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile(array $payload): CommunityProfile
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['health_percentage'] ?? null;

            if ($value === null) {
                $missingFields[] = 'health_percentage';
                goto after_healthPercentage;
            }

            $properties['healthPercentage'] = $value;

            after_healthPercentage:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['documentation'] ?? null;

            if ($value === null) {
                $properties['documentation'] = null;
                goto after_documentation;
            }

            $properties['documentation'] = $value;

            after_documentation:

            $value = $payload['files'] ?? null;

            if ($value === null) {
                $missingFields[] = 'files';
                goto after_files;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'files';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile⚡️Files($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['files'] = $value;

            after_files:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['content_reports_enabled'] ?? null;

            if ($value === null) {
                $properties['contentReportsEnabled'] = null;
                goto after_contentReportsEnabled;
            }

            $properties['contentReportsEnabled'] = $value;

            after_contentReportsEnabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommunityProfile', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CommunityProfile::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CommunityProfile(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommunityProfile', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile⚡️Files(array $payload): Files
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['code_of_conduct'] ?? null;

            if ($value === null) {
                $properties['codeOfConduct'] = null;
                goto after_codeOfConduct;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'codeOfConduct';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConductSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['codeOfConduct'] = $value;

            after_codeOfConduct:

            $value = $payload['code_of_conduct_file'] ?? null;

            if ($value === null) {
                $properties['codeOfConductFile'] = null;
                goto after_codeOfConductFile;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'codeOfConductFile';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['codeOfConductFile'] = $value;

            after_codeOfConductFile:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'license';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['contributing'] ?? null;

            if ($value === null) {
                $properties['contributing'] = null;
                goto after_contributing;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'contributing';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['contributing'] = $value;

            after_contributing:

            $value = $payload['readme'] ?? null;

            if ($value === null) {
                $properties['readme'] = null;
                goto after_readme;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'readme';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['readme'] = $value;

            after_readme:

            $value = $payload['issue_template'] ?? null;

            if ($value === null) {
                $properties['issueTemplate'] = null;
                goto after_issueTemplate;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'issueTemplate';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['issueTemplate'] = $value;

            after_issueTemplate:

            $value = $payload['pull_request_template'] ?? null;

            if ($value === null) {
                $properties['pullRequestTemplate'] = null;
                goto after_pullRequestTemplate;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pullRequestTemplate';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pullRequestTemplate'] = $value;

            after_pullRequestTemplate:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommunityProfile\Files', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Files::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Files(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommunityProfile\Files', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConductSimple(array $payload): CodeOfConductSimple
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

            $value = $payload['key'] ?? null;

            if ($value === null) {
                $missingFields[] = 'key';
                goto after_key;
            }

            $properties['key'] = $value;

            after_key:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeOfConductSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CodeOfConductSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CodeOfConductSimple(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeOfConductSimple', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile(array $payload): CommunityHealthFile
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommunityHealthFile', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CommunityHealthFile::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CommunityHealthFile(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CommunityHealthFile', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple(array $payload): LicenseSimple
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['key'] ?? null;

            if ($value === null) {
                $missingFields[] = 'key';
                goto after_key;
            }

            $properties['key'] = $value;

            after_key:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['spdx_id'] ?? null;

            if ($value === null) {
                $properties['spdxId'] = null;
                goto after_spdxId;
            }

            $properties['spdxId'] = $value;

            after_spdxId:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\LicenseSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(LicenseSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new LicenseSimple(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\LicenseSimple', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\CommunityProfile' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile($object),
                'ApiClients\Client\GitHub\Schema\CommunityProfile\Files' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile⚡️Files($object),
                'ApiClients\Client\GitHub\Schema\CodeOfConductSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConductSimple($object),
                'ApiClients\Client\GitHub\Schema\CommunityHealthFile' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($object),
                'ApiClients\Client\GitHub\Schema\LicenseSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile(mixed $object): mixed
    {
        assert($object instanceof CommunityProfile);
        $result = [];

        $healthPercentage                                           = $object->healthPercentage;
        after_healthPercentage:        $result['health_percentage'] = $healthPercentage;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $documentation = $object->documentation;

        if ($documentation === null) {
            goto after_documentation;
        }

        after_documentation:        $result['documentation'] = $documentation;

        $files                               = $object->files;
        $files                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile⚡️Files($files);
        after_files:        $result['files'] = $files;

        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }

        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $contentReportsEnabled = $object->contentReportsEnabled;

        if ($contentReportsEnabled === null) {
            goto after_contentReportsEnabled;
        }

        after_contentReportsEnabled:        $result['content_reports_enabled'] = $contentReportsEnabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityProfile⚡️Files(mixed $object): mixed
    {
        assert($object instanceof Files);
        $result = [];

        $codeOfConduct = $object->codeOfConduct;

        if ($codeOfConduct === null) {
            goto after_codeOfConduct;
        }

        $codeOfConduct                                         = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConductSimple($codeOfConduct);
        after_codeOfConduct:        $result['code_of_conduct'] = $codeOfConduct;

        $codeOfConductFile = $object->codeOfConductFile;

        if ($codeOfConductFile === null) {
            goto after_codeOfConductFile;
        }

        $codeOfConductFile                                              = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($codeOfConductFile);
        after_codeOfConductFile:        $result['code_of_conduct_file'] = $codeOfConductFile;

        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }

        $license                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple($license);
        after_license:        $result['license'] = $license;

        $contributing = $object->contributing;

        if ($contributing === null) {
            goto after_contributing;
        }

        $contributing                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($contributing);
        after_contributing:        $result['contributing'] = $contributing;

        $readme = $object->readme;

        if ($readme === null) {
            goto after_readme;
        }

        $readme                                = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($readme);
        after_readme:        $result['readme'] = $readme;

        $issueTemplate = $object->issueTemplate;

        if ($issueTemplate === null) {
            goto after_issueTemplate;
        }

        $issueTemplate                                        = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($issueTemplate);
        after_issueTemplate:        $result['issue_template'] = $issueTemplate;

        $pullRequestTemplate = $object->pullRequestTemplate;

        if ($pullRequestTemplate === null) {
            goto after_pullRequestTemplate;
        }

        $pullRequestTemplate                                               = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile($pullRequestTemplate);
        after_pullRequestTemplate:        $result['pull_request_template'] = $pullRequestTemplate;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeOfConductSimple(mixed $object): mixed
    {
        assert($object instanceof CodeOfConductSimple);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $key                             = $object->key;
        after_key:        $result['key'] = $key;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CommunityHealthFile(mixed $object): mixed
    {
        assert($object instanceof CommunityHealthFile);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseSimple(mixed $object): mixed
    {
        assert($object instanceof LicenseSimple);
        $result = [];

        $key                             = $object->key;
        after_key:        $result['key'] = $key;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $spdxId = $object->spdxId;

        if ($spdxId === null) {
            goto after_spdxId;
        }

        after_spdxId:        $result['spdx_id'] = $spdxId;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

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
