<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Advisories;

use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\GlobalAdvisory;
use ApiClients\Client\GitHub\Schema\GlobalAdvisory\Cvss;
use ApiClients\Client\GitHub\Schema\GlobalAdvisory\Epss;
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

class GhsaId implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\GlobalAdvisory' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory($payload),
                'ApiClients\Client\GitHub\Schema\GlobalAdvisory\Cvss' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory⚡️Cvss($payload),
                'ApiClients\Client\GitHub\Schema\GlobalAdvisory\Epss' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory⚡️Epss($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory(array $payload): GlobalAdvisory
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['ghsa_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ghsa_id';
                goto after_ghsaId;
            }

            $properties['ghsaId'] = $value;

            after_ghsaId:

            $value = $payload['cve_id'] ?? null;

            if ($value === null) {
                $properties['cveId'] = null;
                goto after_cveId;
            }

            $properties['cveId'] = $value;

            after_cveId:

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

            $value = $payload['repository_advisory_url'] ?? null;

            if ($value === null) {
                $properties['repositoryAdvisoryUrl'] = null;
                goto after_repositoryAdvisoryUrl;
            }

            $properties['repositoryAdvisoryUrl'] = $value;

            after_repositoryAdvisoryUrl:

            $value = $payload['summary'] ?? null;

            if ($value === null) {
                $missingFields[] = 'summary';
                goto after_summary;
            }

            $properties['summary'] = $value;

            after_summary:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['severity'] ?? null;

            if ($value === null) {
                $missingFields[] = 'severity';
                goto after_severity;
            }

            $properties['severity'] = $value;

            after_severity:

            $value = $payload['source_code_location'] ?? null;

            if ($value === null) {
                $properties['sourceCodeLocation'] = null;
                goto after_sourceCodeLocation;
            }

            $properties['sourceCodeLocation'] = $value;

            after_sourceCodeLocation:

            $value = $payload['identifiers'] ?? null;

            if ($value === null) {
                $properties['identifiers'] = null;
                goto after_identifiers;
            }

            $properties['identifiers'] = $value;

            after_identifiers:

            $value = $payload['references'] ?? null;

            if ($value === null) {
                $properties['references'] = null;
                goto after_references;
            }

            $properties['references'] = $value;

            after_references:

            $value = $payload['published_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'published_at';
                goto after_publishedAt;
            }

            $properties['publishedAt'] = $value;

            after_publishedAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['github_reviewed_at'] ?? null;

            if ($value === null) {
                $properties['githubReviewedAt'] = null;
                goto after_githubReviewedAt;
            }

            $properties['githubReviewedAt'] = $value;

            after_githubReviewedAt:

            $value = $payload['nvd_published_at'] ?? null;

            if ($value === null) {
                $properties['nvdPublishedAt'] = null;
                goto after_nvdPublishedAt;
            }

            $properties['nvdPublishedAt'] = $value;

            after_nvdPublishedAt:

            $value = $payload['withdrawn_at'] ?? null;

            if ($value === null) {
                $properties['withdrawnAt'] = null;
                goto after_withdrawnAt;
            }

            $properties['withdrawnAt'] = $value;

            after_withdrawnAt:

            $value = $payload['vulnerabilities'] ?? null;

            if ($value === null) {
                $properties['vulnerabilities'] = null;
                goto after_vulnerabilities;
            }

            $properties['vulnerabilities'] = $value;

            after_vulnerabilities:

            $value = $payload['cvss'] ?? null;

            if ($value === null) {
                $properties['cvss'] = null;
                goto after_cvss;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'cvss';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory⚡️Cvss($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['cvss'] = $value;

            after_cvss:

            $value = $payload['cwes'] ?? null;

            if ($value === null) {
                $properties['cwes'] = null;
                goto after_cwes;
            }

            $properties['cwes'] = $value;

            after_cwes:

            $value = $payload['epss'] ?? null;

            if ($value === null) {
                $properties['epss'] = null;
                goto after_epss;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'epss';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory⚡️Epss($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['epss'] = $value;

            after_epss:

            $value = $payload['credits'] ?? null;

            if ($value === null) {
                $properties['credits'] = null;
                goto after_credits;
            }

            $properties['credits'] = $value;

            after_credits:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GlobalAdvisory', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(GlobalAdvisory::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new GlobalAdvisory(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GlobalAdvisory', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory⚡️Cvss(array $payload): Cvss
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['vector_string'] ?? null;

            if ($value === null) {
                $properties['vectorString'] = null;
                goto after_vectorString;
            }

            $properties['vectorString'] = $value;

            after_vectorString:

            $value = $payload['score'] ?? null;

            if ($value === null) {
                $properties['score'] = null;
                goto after_score;
            }

            $properties['score'] = $value;

            after_score:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GlobalAdvisory\Cvss', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Cvss::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Cvss(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GlobalAdvisory\Cvss', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory⚡️Epss(array $payload): Epss
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['percentage'] ?? null;

            if ($value === null) {
                $properties['percentage'] = null;
                goto after_percentage;
            }

            $properties['percentage'] = $value;

            after_percentage:

            $value = $payload['percentile'] ?? null;

            if ($value === null) {
                $properties['percentile'] = null;
                goto after_percentile;
            }

            $properties['percentile'] = $value;

            after_percentile:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GlobalAdvisory\Epss', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Epss::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Epss(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\GlobalAdvisory\Epss', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\GlobalAdvisory' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory($object),
                'ApiClients\Client\GitHub\Schema\GlobalAdvisory\Cvss' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory⚡️Cvss($object),
                'ApiClients\Client\GitHub\Schema\GlobalAdvisory\Epss' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory⚡️Epss($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory(mixed $object): mixed
    {
        assert($object instanceof GlobalAdvisory);
        $result = [];

        $ghsaId                                 = $object->ghsaId;
        after_ghsaId:        $result['ghsa_id'] = $ghsaId;

        $cveId = $object->cveId;

        if ($cveId === null) {
            goto after_cveId;
        }

        after_cveId:        $result['cve_id'] = $cveId;

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $htmlUrl                                  = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $repositoryAdvisoryUrl = $object->repositoryAdvisoryUrl;

        if ($repositoryAdvisoryUrl === null) {
            goto after_repositoryAdvisoryUrl;
        }

        after_repositoryAdvisoryUrl:        $result['repository_advisory_url'] = $repositoryAdvisoryUrl;

        $summary                                 = $object->summary;
        after_summary:        $result['summary'] = $summary;

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }

        after_description:        $result['description'] = $description;

        $type                              = $object->type;
        after_type:        $result['type'] = $type;

        $severity                                  = $object->severity;
        after_severity:        $result['severity'] = $severity;

        $sourceCodeLocation = $object->sourceCodeLocation;

        if ($sourceCodeLocation === null) {
            goto after_sourceCodeLocation;
        }

        after_sourceCodeLocation:        $result['source_code_location'] = $sourceCodeLocation;

        $identifiers = $object->identifiers;

        if ($identifiers === null) {
            goto after_identifiers;
        }

        static $identifiersSerializer0;

        if ($identifiersSerializer0 === null) {
            $identifiersSerializer0 = new SerializeArrayItems(...[]);
        }

        $identifiers                                     = $identifiersSerializer0->serialize($identifiers, $this);
        after_identifiers:        $result['identifiers'] = $identifiers;

        $references = $object->references;

        if ($references === null) {
            goto after_references;
        }

        static $referencesSerializer0;

        if ($referencesSerializer0 === null) {
            $referencesSerializer0 = new SerializeArrayItems(...[]);
        }

        $references                                    = $referencesSerializer0->serialize($references, $this);
        after_references:        $result['references'] = $references;

        $publishedAt                                      = $object->publishedAt;
        after_publishedAt:        $result['published_at'] = $publishedAt;

        $updatedAt                                    = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $githubReviewedAt = $object->githubReviewedAt;

        if ($githubReviewedAt === null) {
            goto after_githubReviewedAt;
        }

        after_githubReviewedAt:        $result['github_reviewed_at'] = $githubReviewedAt;

        $nvdPublishedAt = $object->nvdPublishedAt;

        if ($nvdPublishedAt === null) {
            goto after_nvdPublishedAt;
        }

        after_nvdPublishedAt:        $result['nvd_published_at'] = $nvdPublishedAt;

        $withdrawnAt = $object->withdrawnAt;

        if ($withdrawnAt === null) {
            goto after_withdrawnAt;
        }

        after_withdrawnAt:        $result['withdrawn_at'] = $withdrawnAt;

        $vulnerabilities = $object->vulnerabilities;

        if ($vulnerabilities === null) {
            goto after_vulnerabilities;
        }

        static $vulnerabilitiesSerializer0;

        if ($vulnerabilitiesSerializer0 === null) {
            $vulnerabilitiesSerializer0 = new SerializeArrayItems(...[]);
        }

        $vulnerabilities                                         = $vulnerabilitiesSerializer0->serialize($vulnerabilities, $this);
        after_vulnerabilities:        $result['vulnerabilities'] = $vulnerabilities;

        $cvss = $object->cvss;

        if ($cvss === null) {
            goto after_cvss;
        }

        $cvss                              = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory⚡️Cvss($cvss);
        after_cvss:        $result['cvss'] = $cvss;

        $cwes = $object->cwes;

        if ($cwes === null) {
            goto after_cwes;
        }

        static $cwesSerializer0;

        if ($cwesSerializer0 === null) {
            $cwesSerializer0 = new SerializeArrayItems(...[]);
        }

        $cwes                              = $cwesSerializer0->serialize($cwes, $this);
        after_cwes:        $result['cwes'] = $cwes;

        $epss = $object->epss;

        if ($epss === null) {
            goto after_epss;
        }

        $epss                              = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory⚡️Epss($epss);
        after_epss:        $result['epss'] = $epss;

        $credits = $object->credits;

        if ($credits === null) {
            goto after_credits;
        }

        static $creditsSerializer0;

        if ($creditsSerializer0 === null) {
            $creditsSerializer0 = new SerializeArrayItems(...[]);
        }

        $credits                                 = $creditsSerializer0->serialize($credits, $this);
        after_credits:        $result['credits'] = $credits;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory⚡️Cvss(mixed $object): mixed
    {
        assert($object instanceof Cvss);
        $result = [];

        $vectorString = $object->vectorString;

        if ($vectorString === null) {
            goto after_vectorString;
        }

        after_vectorString:        $result['vector_string'] = $vectorString;

        $score = $object->score;

        if ($score === null) {
            goto after_score;
        }

        after_score:        $result['score'] = $score;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️GlobalAdvisory⚡️Epss(mixed $object): mixed
    {
        assert($object instanceof Epss);
        $result = [];

        $percentage = $object->percentage;

        if ($percentage === null) {
            goto after_percentage;
        }

        after_percentage:        $result['percentage'] = $percentage;

        $percentile = $object->percentile;

        if ($percentile === null) {
            goto after_percentile;
        }

        after_percentile:        $result['percentile'] = $percentile;

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
