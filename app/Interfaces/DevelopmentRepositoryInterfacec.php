<?php

namespace App\Interfaces;

interface DevelopmentRepositoryInterface
{
    public function getAll(
        ?string $search,
        ?int $limit,
        bool $execute
    );
    public function getById(
        ?string $search,
        ?int $rowPerPage
    );
    public function getAllPaginated(
        ?string $search,
        ?int $rowPerPage
    );
}
