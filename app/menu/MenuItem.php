<?php
namespace MenuWithAuthentication\menu;

class MenuItem
{
    protected $title;
    protected $icon;
    protected $url;
    protected $role;
    protected $permission;
    protected $user;
    private $id;

    /**
     * MenuItem constructor.
     */
    public function __construct($id)
    {

        $this->id = $id;
    }


    /**
     * @param null $title
     * @return $this
     */
    public function title($title=null){
       if ($title==null){
          return $this->title;
     }
     $this->title = $title;
     return $this;
    }

    /**
     * @param null $title
     * @return $this
     */
    public function icon($icon=null){
        if ($icon==null){
            return $this->icon;
        }
        $this->icon = $icon;
        return $this;
    }

    /**
     * @param null $url
     * @return $this
     */
    public function url($url=null){
        if ($url==null){
            return $this->url;
        }
        $this->url = $url;
        return $this;
    }

    /**
     * @param null $role
     * @return $this
     */
    public function role($role=null){
        if ($role==null){
            return $this->role;
        }
        $this->role = $role;
        return $this;
    }

    /**
     * @param null $permission
     * @return $this
     */
    public function permission($permission=null)
    {
        if ($permission==null){
            return $this->permission;
        }
        $this->permission = $permission;
        return $this;
    }

    /**
     * @param null $user
     * @return $this
     */
    public function user($user=null)
    {
        if ($user==null){
            return $this->user;
        }
        $this->user = $user;
        return $this;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    private function render()
    {
        $data = array();
        $data['url'] = $this->url;
        $data['icon'] = $this->icon;
        $data['title'] = $this->title;
        $data['id'] = $this->id;
//        $data['permisson'] = $this->permisson;
//        $data['role'] = $this->role;
//        $data['user'] = $this->user;
        return view('menu.menuitem',$data);
    }

}