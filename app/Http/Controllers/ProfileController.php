<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Http\Resources\ProfileResource;
use App\Repositories\ProfileRepository;

class ProfileController extends Controller
{
    private ProfileRepository $profileRepository;

    public function __construct(
        ProfileRepository $profileRepository
    ) {
        $this->profileRepository = $profileRepository;
    }

    public function index()
    {
        try {
            $profile = $this->profileRepository->get();

            if (!$profile) {
                return ResponseHelper::jsonResponse(false, 'Data Profile Tidak Ada', null, 404);
            }

            return ResponseHelper::jsonResponse(true, 'Profile Berhasil Diambil', new ProfileResource($profile), 200);
        } catch (\Exception $e) {
            return ResponseHelper::jsonResponse(false, $e->getMessage(), null, 500);
        }
    }

    // public function create(StoreRequest $request)
    // {
    //     $profile = $this->profileRepository->create($request->validated());
    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Profile created successfully',
    //         'data' => $profile,
    //     ], 201);
    // }

    // public function update(UpdateRequest $request)
    // {
    //     $profile = $this->profileRepository->update($request->validated());
    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Profile updated successfully',
    //         'data' => $profile,
    //     ], 200);
    // }
}
