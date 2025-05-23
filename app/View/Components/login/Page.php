<?php

namespace App\View\Components\login;

use App\Models\Auth;
use App\Models\User;
use Illuminate\View\Component;

class Page extends Component
{
    public $authUser;
    public $message = "test";
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(User $authUser)
    {
        //
        $this->authUser = $authUser;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.login.page');
    }
}
