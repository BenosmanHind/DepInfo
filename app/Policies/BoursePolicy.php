<?php

namespace App\Policies;

use App\Bourse;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class BoursePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any bourses.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the bourse.
     *
     * @param  \App\User  $user
     * @param  \App\Bourse  $bourse
     * @return mixed
     */
    public function view(User $user, Bourse $bourse)
    {
        //
    }

    /**
     * Determine whether the user can create bourses.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the bourse.
     *
     * @param  \App\User  $user
     * @param  \App\Bourse  $bourse
     * @return mixed
     */
    public function update(User $user, Bourse $bourse)
    {
        $role = Auth::user()->role;
        
          switch ($role) {
              case '0':
                 return true;
                  break;
              
              case '1':
                 return true;
                  break;
          }
    }

    /**
     * Determine whether the user can delete the bourse.
     *
     * @param  \App\User  $user
     * @param  \App\Bourse  $bourse
     * @return mixed
     */
    public function delete(User $user, Bourse $bourse)
    {
        $role = Auth::user()->role;
        
          switch ($role) {
              case '0':
                 return true;
                  break;
              
              case '1':
                 return true;
                  break;
          }
    }

    /**
     * Determine whether the user can restore the bourse.
     *
     * @param  \App\User  $user
     * @param  \App\Bourse  $bourse
     * @return mixed
     */
    public function restore(User $user, Bourse $bourse)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the bourse.
     *
     * @param  \App\User  $user
     * @param  \App\Bourse  $bourse
     * @return mixed
     */
    public function forceDelete(User $user, Bourse $bourse)
    {
        //
    }
}
