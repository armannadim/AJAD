@foreach ($menus as $menu)
    @if ($children = $menu->getChildren())
    <li class="dd-item dd3-item" data-id="{!!$menu->getRouteKey()!!}">
        <div class="dd-handle dd3-handle"></div>
        <div class="dd3-content">
            <a href='' data-href="{{guard_url('menu/submenu')}}/{!!$menu->getRouteKey()!!}" data-action="LOAD" data-load-to='#menu-entry' >
                <i class="{!! !empty($menu->icon) ?  $menu->icon : '' !!}"></i> {!!$menu->name!!}
                <span class="pull-right"><i class="fa fa-angle-double-right"></i></span>
            </a>
        </div>
        <ol class="dd-list">
            @include( 'menu::admin.menu.sub.nestable', array('menus' => $children))
        </ol>
    </li>
    @else
    <li class="dd-item dd3-item" data-id="{!!$menu->getRouteKey()!!}">
        <div class="dd-handle dd3-handle"></div>
        <div class="dd3-content">
            <a href='' data-href="{{guard_url('menu/submenu')}}/{!!$menu->getRouteKey()!!}" data-action="LOAD" data-load-to='#menu-entry' >
                <i class="{!! !empty($menu->icon) ?  $menu->icon : '' !!}"></i> {!!$menu->name!!}
                <span class="pull-right"><i class="fa fa-angle-double-right"></i></span>
            </a>
        </div>
    </li>
    @endif
@endforeach
