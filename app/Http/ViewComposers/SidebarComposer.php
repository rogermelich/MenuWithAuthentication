<?php

namespace MenuWithAuthentication\Http\ViewComposers;
use Illuminate\Contracts\View\View;

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 14/12/15
 * Time: 17:11
 */
class SidebarComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menu', $this->getSidebarMenu());
    }

    private function getSidebarMenu()
    {
        $menu = MenuWithAuthentication::instance()->getMenu();

        return array($menu);
    }

}