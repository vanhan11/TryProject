<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Menu extends Model
{
    
    use Sluggable;

    /**
     * {@inheritDoc}
     */
    protected $table = 'menus';

        /**
     * Return user's query for Datatables.
     *
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function datatables()
    {
        // return static::select( 'name', 'slug', 'parent_id', 'id' )->get();

        $result = array();
        $parents = Menu::where('parent_id',0)->get();
        if ($parents) {
          $looping = 0;
          foreach ($parents as $key => $value) {
            $childs = Menu::where('parent_id',$value->id)->get();
            $result[$looping]['name'] = $value->name;
            $result[$looping]['slug'] = $value->slug;
            $result[$looping]['parent_id'] = ($value->parent_id == 0 ? '<label class="badge badge badge-pill badge-success">Parent</label>' : '<label class="badge badge badge-pill badge-warning">Child</label>');
            $result[$looping]['id'] = $value->id;

            $edit_url = route('admin.menu.edit', $value->id );
            $delete_url = route('admin.menu.destroy', $value->id);

            $data['edit_url']   = $edit_url;
            $data['delete_url'] = $delete_url;
            $result[$looping]['action'] = view('backend.admin.forms.action', $data)->render();

            $looping++;
            if ($childs) {
              foreach ($childs as $key_child => $value_child) {
                $result[$looping]['name'] = $value_child->name;
                $result[$looping]['slug'] = $value_child->slug;
                $result[$looping]['parent_id'] = ($value_child->parent_id == 0 ? '<label class="badge badge badge-pill badge-success">Parent</label>' : '<label class="badge badge badge-pill badge-warning">Child</label>');
                $result[$looping]['id'] = $value_child->id;

                $edit_url = route('admin.menu.edit', $value_child->id );
                $delete_url = route('admin.menu.destroy', $value_child->id);

                $data['edit_url']   = $edit_url;
                $data['delete_url'] = $delete_url;
                $result[$looping]['action'] = view('backend.admin.forms.action', $data)->render();

                $looping++;
              }
            }
          }
        }

        return collect($result);
    }



    /**
     * slug for menu name
     *
     * @return     array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ],
        ];
    }
}
