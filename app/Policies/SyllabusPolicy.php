<?php

namespace App\Policies;

use App\Syllabus;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class SyllabusPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Syllabus  $syllabus
     * @return mixed
     */
    public function view(User $user, Syllabus $syllabus)
    {
         
        $departmnet = $syllabus->department;
        return $user->belongsToDepartment($departmnet);
             
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Syllabus  $syllabus
     * @return mixed
     */
    public function update(User $user, Syllabus $syllabus)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Syllabus  $syllabus
     * @return mixed
     */
    public function delete(User $user, Syllabus $syllabus)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Syllabus  $syllabus
     * @return mixed
     */
    public function restore(User $user, Syllabus $syllabus)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Syllabus  $syllabus
     * @return mixed
     */
    public function forceDelete(User $user, Syllabus $syllabus)
    {
        //
    }
}
