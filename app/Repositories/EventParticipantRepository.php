<?php

namespace App\Repositories;

use App\Interfaces\EventParticipantRepositoryInterface;
use App\Models\Event;
use App\Models\EventParticipant;
use Exception;

class EventParticipantRepository implements EventParticipantRepositoryInterface
{
    public function getAll(
        ?string $search,
        ?int $limit,
        bool $execute
    ) {
        $query = EventParticipant::where(function ($query) use ($search) {
            if ($search) {
                $query->search($search);
            }
        });

        $query->orderBy('created_at', 'desc');

        if ($limit) {
            $query->limit($limit);
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
