<div class="">
    <img alt="Usuario" src="{{url('assets/images/user.png')}}" class="img-circle img-responsive hidden-xs center-block" height="170px" width="170px">
</div>
<nav class="main-nav">
        <ul class="main-menu">
            <li <?php if(isset($active)): echo "class='".$active[0]."'"; endif; ?>><a href="#" class="js-sub-menu-toggle"><i class="fa fa-list-alt fw"></i><span class="text">Catálogos</span>
                    <i class="toggle-icon fa fa-angle-left"></i></a>
                    <ul class="sub-menu <?php if(isset($active)): echo $active[1]; endif; ?>">
                            <li <?php if(isset($active)):  if($active[2]=='cliente'): echo "class='".$active[0]."'"; endif; endif; ?>>
                                <a href="{{route('cliente.index')}}"><span class="text">Clientes</span></a>
                            </li>
                            <li <?php if(isset($active)): if($active[2]=='usuario'): echo "class='".$active[0]."'";  endif; endif; ?>>
                                <a href="{{route('usuario.index')}}"><span class="text">Usuarios</span></a>
                            </li>
                    </ul>
            </li>
            <li ><a href="#" class="js-sub-menu-toggle"><i class="fa fa-briefcase"></i><span class="text">Créditos</span>
                <i class="toggle-icon fa fa-angle-left"></i></a>
                    <ul class="sub-menu">
                        <li ><a href=""><span class="text">B&uacute;squedas</span></a></li>
                        <li ><a href=""><span class="text">Nuevo Cr&eacute;dito</span></a></li>
                    </ul>
            </li>
            <li ><a href="#"><i class="fa fa-tasks"></i><span class="text">Estadisticas</span></a></li>
        </ul>
</nav>