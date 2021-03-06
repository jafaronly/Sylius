<?php

declare(strict_types=1);

namespace AppBundle\Repository;

use AppBundle\Entity\Book;
use Sylius\Component\Resource\Repository\RepositoryInterface;

final class CustomBookRepository
{
    /** @var RepositoryInterface */
    private $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function findCustomBook(string $author): ?Book
    {
        return $this->repository->findOneBy(['author' => $author]);
    }

    public function findCustomBooks(): iterable
    {
        return $this->repository->createPaginator();
    }
}
