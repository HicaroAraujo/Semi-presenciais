<?php

namespace App\Policies; 


use App\Models\User; 


class TimePolicy
{

    //  se não nullo volta verdadeiro se for  nullo volta false
    public function create(?User $user): bool
    {
        return !is_null($user);
    }
    /**
     * Determine se o usuário pode atualizar o modelo.
    */
    public function update(?User $user): bool
    {
        return !is_null($user);
    }

    public function destroy(?User $user): bool
    {
        return !is_null($user);
    }

   
}