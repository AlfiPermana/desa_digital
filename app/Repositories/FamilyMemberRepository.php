<?php

namespace App\Repositories;

use App\Interfaces\FamilyMemberRepositoryInterface;
use App\Models\FamilyMember;
use Illuminate\Support\Facades\DB;

class FamilyMemberRepository implements FamilyMemberRepositoryInterface
{
    public function getAll(
        ?string $search,
        ?int $limit,
        bool $execute
    ) {
        $query = FamilyMember::query();

        if ($search) {
            $query->search($search);
        }

        $query->orderBy('created_at', 'desc');

        if ($limit) {
            $query->take($limit);
        }
        if ($execute) {
            return $query->get();
        }
        return $query;
    }

    public function getAllPaginated(
        ?string $search,
        ?int $rowPerPage
    ) {
        $query = $this->getAll(
            $search,
            $rowPerPage,
            false
        );

        return $query->paginate($rowPerPage);
    }
}
