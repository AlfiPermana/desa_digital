<?php

namespace App\Repositories;

use App\Interfaces\ProfileRepositoryInterface;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;


class ProfileRepository implements ProfileRepositoryInterface
{
    public function get()
    {
        return Profile::first();
    }

    public function create(
        array $data
    ) {

        DB::beginTransaction();
        try {
            $profile = new Profile();
            $profile->thumbnail = $data['thumbnail']->store('assets/profile', 'public');
            $profile->name = $data['nama'];
            $profile->about = $data['about'];
            $profile->headman = $data['headman'];
            $profile->people = $data['people'];
            $profile->argicultural_area = $data['argicultural_area'];
            $profile->total_area = $data['total_area'];

            if (array_key_exists('image', $data)) {
                foreach ($data['image'] as $image) {
                    $profile->profileImages()->create([
                        'image' => $image->store('assets/profile', 'public'),
                    ]);
                }
            }

            $profile->save();
            DB::commit();
            return $profile;
        } catch (\Exception $e) {;
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
    }
    public function update(
        array $data
    ) {

        DB::beginTransaction();
        try {
            $profile = Profile::first();

            if (isset($data['thumbnail'])) {
                $profile->thumbnail = $data['thumbnail']->store('assets/profile', 'public');
            }
            $profile->name = $data['nama'];
            $profile->about = $data['about'];
            $profile->headman = $data['headman'];
            $profile->people = $data['people'];
            $profile->argicultural_area = $data['argicultural_area'];
            $profile->total_area = $data['total_area'];

            if (array_key_exists('image', $data)) {
                foreach ($data['image'] as $image) {
                    $profile->profileImages()->create([
                        'image' => $image->store('assets/profile', 'public'),
                    ]);
                }
            }

            $profile->save();
            DB::commit();
            return $profile;
        } catch (\Exception $e) {;
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }
    }
}
